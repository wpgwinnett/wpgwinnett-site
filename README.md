# WordPress Gwinnett


## Requirements

PHP 5.3.2+

## Prerequisites

Install Composer by running `curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer` on Linux/Unix/OSX

## Installation

(to be updated)


== Github commands - establishing WordPress on your drive ==

1.  Got to the WordPress Gwinnett Github site.  https://github.com/wpgwinnett/wpgwinnett-site
Fork the project using the fork button in the upper right hand corner


2. Clone a copy of the forked repo via the command line on your computer. 
 git clone <repository name>


3.  Check the remote repositories via the command 
  git remote -v


4.  Add the upstream repository -  reference to remote repository.  
 git remote add upstream https://github.com/wpgwinnett/wpgwinnett-site.git
 
5.  then do the following command in your directory
composer install
