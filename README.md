Requirements:

- php 7.3 - 8.1
- npm
- composer


Run the following commands
- composer install
- npm install
- npm run dev
- php artisan key:generate
- cp .env.example .env

Modify the .env file to add your database connection. For Example:

DB_CONNECTION=mysql
DB_HOST=yourhost
DB_PORT=3306
DB_DATABASE=territorium
DB_USERNAME=root
DB_PASSWORD=1234


- php artisan migrate
- php artisan db:seed
