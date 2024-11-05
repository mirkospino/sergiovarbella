# Load DSL and Setup Up Stages
require 'capistrano/setup'
require 'capistrano/deploy'
require "capistrano/scm/git"
install_plugin Capistrano::SCM::Git

require 'capistrano/composer'
require 'capistrano/wpcli'
Dir.glob('lib/capistrano/tasks/*.cap').each { |r| import r }

