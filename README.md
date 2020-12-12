<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
This project runs with Laravel v8.18.1
</p>

# Online Courses

## Overview

This project runs with Laravel v8.18.1

## Features

...

# Getting Started

## Installation

Please check the [Official Documentation](https://laravel.com/docs/8.x/installation) installation guide for server requirements before you start.

Clone the repository

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git

Switch to the repo folder

    cd laravel-realworld-example-app

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Dependencies

### Back
* [laravel/fortify](laravel/fortify)
* [inFureal/artisan-gui](inFureal/artisan-gui)
* [mckenziearts/laravel-notify](mckenziearts/laravel-notify)

### Front
* [Font Awesome](https://fontawesome.com/)
* [Bootstrap 5 (beta1)](https://getbootstrap.com/)