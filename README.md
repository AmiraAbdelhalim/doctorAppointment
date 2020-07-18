# Doctor Appointment


 A simple website to have an appointment with specialized doctor. A paitent is register then make a reservation. An admin create an appointment with a suitable doctor according to the doctor specialization and a notification is send to both patient and doctor. They can approve or decline the appointment and the admin will be notified to make a new appointment. 

### Prerequisits
- MySQL database
- PHP 7
- Laravel 7

### Installation
- Download the zip file or clone the repo
- create a database in MySQL
- rename env.example to env change your database credentials
- run the following commands
"require laravel needed packages"
```sh
$ composer install
```
"database migration"
```sh
$ php artisan migrate
```
"create seeds"
```sh
$ php artisan db:seed
```
"run server"
```sh
php artisan serve
```
-Go to the url
```sh
http://127.0.0.1:8000
```


### Technologies
-Laravel
-MySQL
-HTML5
-CSS3

### Database Schema
```sh
https://drawsql.app/amira/diagrams/doctor-appointments
```
- There is also a diagram attached in the files named "database_schema.png"
