#!/bin/bash
a=0
while [ $a -eq 0 ]
do
    $a=php test.php
    sleep 1
    echo "Wait for mySQL ..."
done
echo "MySql Ready"

php artisan key:generate
php artisan migrate:refresh --seed --force
php artisan migrate --seed --force