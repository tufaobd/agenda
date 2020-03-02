# Agenda 
Criação de Agenda usando Laravel, frontend será adicionado no dia 02/03/2020

## Install Docker:
 
    docker-compose build && docker-compose up -d

## Make migrates:
 - Out off Docker -> `docker compose exec php php /var/www/html/artisan migrate`
 - Inside Docker -> `php artisan migrate`

## Install Dependencies
 - Out off Docker -> `docker compose exec php php /var/www/html/composer install`
 - Inside docker -> `composer install`

## For API

`X-CSRF-TOKEN : {{token}}`

    X-Requested-With: XMLHttpRequest
    


## I will put bootstrap to make visual better.


## File .env include on git code here. Make easy appreciate

## Information about connection on database

 - DB_CONNECTION=mysql
 - DB_HOST=mysql
 - DB_PORT=3306
 - DB_DATABASE=php
 - DB_USERNAME=root
 - DB_PASSWORD=super
 
 
 ## API EXAMPLE
 - localhost:8080/mensagens
 - localhost:8080/contatos


