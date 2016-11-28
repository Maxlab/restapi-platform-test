REST Api test On API Platform Framework
==========================

*The new breed of web frameworks*

[![API Platform](https://api-platform.com/logo-250x250.png)](https://api-platform.com)


For fast run project
===

- $ git clone https://github.com/Maxlab/restapi-platform-test.git rest-test
- $ cd rest-test/ && composer update
- Config your own connction to local pgsql in /app/config/parameters.yml
- $ php bin/console doctrine:database:create &&
    php bin/console doctrine:schema:update --force &&
    php bin/console fixtures:load
    
- $ php bin/console server:start -p8999 OR use *[STACKER](https://github.com/Maxlab/stacker)*
- open in webbrowser localhost:8999 and get, set, replace, etc. Read doc.




