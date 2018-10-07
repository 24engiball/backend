#!/bin/bash
a=0
b=0
while [ $a -eq $b ]
do
    b= php test.php
    sleep 1
    echo "Wait for mySQL ..."
    echo b
done
echo "MySql Ready"

php artisan key:generate
php artisan migrate:refresh --seed --force
php artisan migrate --seed --force