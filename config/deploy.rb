require 'capistrano'
require 'capistrano-vexxhost'
require 'bundler/capistrano'

# Account Settings
set :user, "tecnotek"
set :password, "soporte5501"
set :domain, "t-signals.com"
set :mount_path, "/"
set :application, "tsignals"

set :scm, :git
set :repository, "git@github.com:selimcr/tsignals.git"