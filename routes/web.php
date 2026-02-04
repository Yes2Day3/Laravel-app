<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    $user1 = new Users();
    $user1->name = "John";
    $user2 = new Users();
    $user2->name = "Jane";
    $user3 = new Users();
    $user3->name = "Joe";
    $car1 = new Cars();
    $car1->brand = "BMW";
    $car2 = new Cars();
    $car2->brand = "Audi";
    $car3 = new Cars();
    $car3->brand = "Lada";

    $users = [$user1, $user2, $user3];
    $cars = [$car1, $car2, $car3];

    return view('about', ['users' => $users, 'cars' => $cars]);
});

Route::get('/greeting', [UserController::class, 'greetUser']);