# frozen_string_literal: true

# Load DSL and Setup Up Stages
require 'capistrano/setup'

# Includes default deployment tasks
require 'capistrano/deploy'

# Include the git capistrano module
require 'capistrano/scm/git'
install_plugin Capistrano::SCM::Git

# Include the git submodule strategy for capistrano
require "capistrano/scm/git-with-submodules"
install_plugin Capistrano::SCM::Git::WithSubmodules

# Includes everything else
require 'yaml'

require 'capistrano/file-permissions'

# Loads custom tasks from `lib/capistrano/tasks' if you have any defined.
Dir.glob('lib/capistrano/tasks/*.rake').each { |r| import r }

set :services, [:apache2]
require 'capistrano/service'
