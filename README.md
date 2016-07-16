meetUs 

http://imeetus.pl/

======
meetUs is a great new website connecting people with same hobbies, allowing them to meet up and do amazing things together.

Website was created using:

- HTML
- CSS
- Bootstrap front-end framework
- OOP
- PHP
- Symfony2
- FOSUserBundle
- Doctrine 2 ORM
- DQL
- Twig templates 

Implemented features:

1. Registration, login and logout
2. Editing user profile
3. Adding new group, editing group info
4. Adding new event, editing group info 
5. Adding photos for user, group and event
6. Editing photos
7. Geolocalization
8. Map with marked event address (on event site)
9. Admin panel: deleting users, groups, events; accepting groups, events
10. Main page for unlogged user
11. Sending messages between users
12. Adding comments for events

Installation guide:

1. Download repository 
2. Unpack zip file 
3. Open command line and type: 'cd join_us' to browse board directory 
4. Next at command line type: 'composer install' - provide database parameters when asked 
5. Next at command line type: php app/console doctrine:database:create 
6. Next at command line type: php app/console doctrine:schema:update --force 
7. Next at command line type: php app/console server:start 
8. Browse: http://localhost:8000 

Authors:

    Matuszczak Marta,
    Roszczypała Justyna,
    Kawczyński Paweł,
    Staniszewski Zachariasz.

© 2016 Matuszczak Marta, Roszczypała Justyna, Kawczyński Paweł, Staniszewski Zachariasz
