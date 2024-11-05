set :keep_releases, 2
set :stage, :production
set :user, 'u557318873'
set :webdir, 'public_html'
set :tmp_dir, "/home/#{fetch(:user)}/tmp/capistrano"
set :deploy_to, -> { "/home/#{fetch(:user)}/domains/#{fetch(:application)}/#{fetch(:webdir)}" }
set :wpcli_remote_url, 'https://sergiovarbella.com'
set :wpcli_local_url, 'https://sergiovarbella.test'
server '92.113.19.134', user: fetch(:user), roles: %w{web app db}, port: 65002
fetch(:default_env).merge!(wp_env: :production)








