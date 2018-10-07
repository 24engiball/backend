#!/bin/bash
php test.php
php artisan key:generate
php artisan migrate:refresh --seed --force
php artisan migrate --seed --force