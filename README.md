# Ramona

A video sharing platform written in PHP 7 using Laravel 6.

## Installation

1. `cp .env.example .env`
1. `docker-compose up -d`
1. `docker-compose exec php composer install`
1. `docker-compose exec php php artisan migrate:refresh --seed`
1. `docker-compose ps`
