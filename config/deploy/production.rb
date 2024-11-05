set :keep_releases, 3
set :stage, :production
set :tmp_dir, '/home/ul23sy1e/tmp/capistrano/'
set :deploy_to, -> { "/home/ul23sy1e/sergiovarbella.com"}
set :wpcli_remote_url, 'https://sergiovarbella.com'
set :wpcli_local_url, 'https://sergiovarbella.test'
server 'lhcp3157.webapps.net', user: 'ul23sy1e', roles: %w{web app db}, port: 25088
fetch(:default_env).merge!(wp_env: :production)
