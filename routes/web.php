<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    class Users{
        public $name;
    }
    class Cars{
        public $brand;
    }
    $user = new Users();
    $user->name = "John";
    $car = new Cars();
    $car->brand = "BMW";
    return view('about', ['user' => $user, 'car' => $car]);
});
