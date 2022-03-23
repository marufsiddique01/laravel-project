# Laravel Experimental Project

This project is a playground for me to learn and deploy different types of libary/packages to learn the concept of laravel.


## Deployment

To deploy this project: 

Install Composer and NPM Dependencies
```
  composer install
```
Create a copy of your .env file
```
  cp .env.example .env
```
Generate an app encryption key
```
  php artisan key:generate
```

Create an empty database for our application. Then 
in the .env file, add database information to allow Laravel to connect to the database and
migrate the database

```
  php artisan migrate
```
Finally RUN the project
```
  php artisan serve
```
