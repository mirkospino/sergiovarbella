set :application, "sergiovarbella.com"
set :repo_url, "git@github.com:mirkospino/sergiovarbella.git"
set :branch, 'main'
set :linked_files, fetch(:linked_files, []).push('.env', 'web/.htaccess','auth.json')
set :linked_dirs, fetch(:linked_dirs, []).push('web/app/uploads', 'web/app/updraft')
set :webroot, 'web'
set :theme_dir, 'sergiovarbella'
set :deploy_via, :copy
set :linked_dirs, fetch(:linked_dirs, []).push( fetch(:webroot) + '/app/uploads' )

set :log_level, :debug
set :scm_verbose, "true"

namespace :deploy do
  set :local_app_path, Pathname.new(Dir.pwd)
  set :local_theme_path, fetch(:local_app_path).join(fetch(:webroot), 'app/themes/', fetch(:theme_dir))
  set :local_dist_path, fetch(:local_theme_path).join('dist')
  task :compile do
    run_locally do
      within fetch(:local_theme_path) do
        execute :yarn, 'build:production'
      end
    end
  end
  task :copy do
    on roles(:web) do
      set :theme_path, fetch(:release_path).join(fetch(:webroot),'app/themes/',fetch(:theme_dir))
      set :remote_dist_path, -> { release_path.join(fetch(:theme_path)).join('dist') }
      puts "Your local distribution path: #{fetch(:local_dist_path)} "
      puts "Your remote distribution path: #{fetch(:remote_dist_path)} "
      puts "Uploading files to remote "
      upload! fetch(:local_dist_path).to_s, fetch(:remote_dist_path), recursive: true
    end
  end
  task assets: %w(compile copy)
end
after 'deploy:updated', 'deploy:assets'
namespace :deploy do
  desc 'Update WordPress template root paths to point to the new release'
  task :update_option_paths do
    on roles(:app) do
      set :theme_path, fetch(:release_path).join(fetch(:webroot),'app/themes/',fetch(:theme_dir))
      within fetch(:theme_path) do
        execute :composer, :install
      end
      within fetch(:release_path) do
        if test :wp, :core, 'is-installed'
          [:stylesheet_root, :template_root].each do |option|
            value = capture :wp, :option, :get, option, raise_on_non_zero_exit: false
            if value != '' && value != '/themes'
              execute :wp, :option, :set, option, fetch(:release_path).join( fetch(:webroot) + '/wp/wp-content/themes')
            end
          end
        end
      end
    end
  end
end
after 'deploy:publishing', 'deploy:update_option_paths'
namespace :deploy do
  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      execute :service, :apache, :reload
    end
  end
end


