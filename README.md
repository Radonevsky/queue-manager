## About
Test Task Laravel Queue Manager

## Start Project
This project is run in Docker with Laravel Sail.

### Run Project
Make sure you have installed and updated Docker and Laravel Sail.   
(For more details https://laravel.com/docs/10.x/sail)  
Clone the project and navigate to the project directory.
```
cp .env.example .env
php artisan key:generate
sail up -d
```
### Run Migrations
```
sail php artisan migrate
```
### Run Queue
```
sail php artisan queue:work
```
#### Try to add two different task in the queue
http://localhost/prepare  
http://localhost/publish
#### And open the table with the tasks in the queue
http://localhost  
Each task is executed with a delay of 3 seconds for the convenience of checking tasks in the table
