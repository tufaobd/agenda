## Agenda
Criação de Agenda usando Laravel



Install Docker:
docker-compose build && docker-compose up -d

Make migrates:
Out off Docker -> docker compose exec php php /var/www/html/artisan migrate
Inside Docker -> php artisan migrate

Install Dependecies
Out off Docker -> docker compose exec php php /var/www/html/composer install
Inside docker -> composer install

I will put boostrap to make visual better.


File .env include on git

Information about conection on database
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=php
DB_USERNAME=root
DB_PASSWORD=super
