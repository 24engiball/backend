#!/bin/bash
php artisan key:generate
php artisan migrate:refresh --seed --force
php artisan migrate --seed --force