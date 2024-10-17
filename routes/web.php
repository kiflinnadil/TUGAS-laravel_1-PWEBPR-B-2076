<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/contact', function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++){
        $contacts[]= [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'occupation' => $faker->jobTitle
        ];
    };
    return view('contact', ['contact' => $contacts]);
})->name('contact');

// Route::get('/', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
