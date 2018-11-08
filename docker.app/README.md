The Docker setup for PHP applications using PHP7-FPM + Nginx + XDebug

### RUN

`docker-compose up -d`



### Config PHPStorm
To config your PHPStorm use this guide:
https://www.jetbrains.com/help/phpstorm/configuring-xdebug.html

And when you add a server, don't use localhost, instead use the Docker's ip:

`172.17.0.1`