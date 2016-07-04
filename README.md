joinUs
======

Website was created using:

HTML 
CSS 
Bootstrap front-end framework 
OOP PHP 
Symfony2 
FOSUserBundle 
Doctrine 2 ORM, DQL 
Twig templates 

Implemented features:

registration 
user login and logout 
edit user profile 
user can add and delete event
user can create group and delete them 

Installation guide:

download repository 
unpack zip file 
open command line and type: 'cd join_us' to browse board directory 
next at command line type: 'composer install' - provide database parameters when asked 
next at command line type: php app/console doctrine:database:create 
next at command line type: php app/console doctrine:schema:update --force 
next at command line type: php app/console server:start 
browse: http://localhost:8000 

