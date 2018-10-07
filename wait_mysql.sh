#!/bin/bash

while !(mysqladmin ping --host=$DB_HOST  -utask -psecret)
do
    sleep 1
    echo "Wait for mySQL ..."
done
echo "MySql ready"

php artisan key:generate
php artisan migrate:fresh --seed --force