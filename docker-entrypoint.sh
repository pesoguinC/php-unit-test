#!/bin/bash

if [ ! -d "/var/www/html/vendor" ]; then
  curl -sS https://getcomposer.org/installer | php \
    && php /var/www/html/composer.phar require --dev phpunit/phpunit
fi

exec "apache2-foreground"
