################################################################################
## Setup Environment
################################################################################

# The Git branch this environment should be attached to.
set :branch, 'main'

# The environment's name. To be used in commands and other references.
set :stage, :production

# The URL of the website in this environment.
set :stage_url, 'wordpress-production.wcmc-beijing.com'

# The environment's server credentials
server 'production.wcmc-beijing.com', user: 'wcmc', roles: %w(web app db)

# The deploy path to the website on this environment's server.
set :deploy_to, "/home/#{fetch(:deploy_user)}/#{fetch(:application)}"

# The web user on this environment's server.
set :web_user, 'www-data'
