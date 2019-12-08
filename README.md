# PhpMyTube!

A video sharing platform written in PHP language.

## Installation

1. `cp .env.example .env`
1. `docker-compose up -d`
1. `docker-compose exec phpmytube_php composer install`
1. `docker-compose exec phpmytube_php php artisan db:refresh --seed`
1. `docker-compose ps`
