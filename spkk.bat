@echo off
:: Title of the command prompt window
title Start Laravel Project and MySQL

:: Set path to PHP and Composer (replace with your actual path if necessary)
set PATH=%PATH%;C:\tools\php83\php;C:\composer

:: Start MySQL service (if running via XAMPP or WAMP)
echo Starting MySQL server...
net start MySQL

:: Navigate to your Laravel project directory
cd C:\Users\HP\laravel\spkk

:: Start Laravel development server
echo Starting Laravel development server...
start php artisan serve

:: Start PowerShell and run `npm run dev` command in the Laravel project directory
echo Starting npm development server...
start powershell -Command "cd C:\Users\HP\laravel\spkk; npm run dev"

:: Keep the command prompt window open
pause
