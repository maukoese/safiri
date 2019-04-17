# Safiri Ticketing Platform
Booking Platform Implemented With Laravel

## Installation
Download and extract or clone this repo to a directory on your device.

cd into the directory and execute `composer install`

### Database
Create a database called safiri and import sample data from `safiri.sql`. Change DB_DATABASE, DB_USERNAME and DB_PASSWORD in the `'env` file to match your server configutation.

You can create new users by going to `http://localhost:8000/register` and creating a new account.

## Running
You can use PHP's inbuilt server to run the project. In the project directory, open a terminal and type `php artisan serve`
You should be able to view the site in a browser on `http://localhost:8000`
