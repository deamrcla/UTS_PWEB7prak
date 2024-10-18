<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
});

// route::get("/login", function() {
//     return view("login", ["title" => "login"]);
// });

// route::get("/login", function() {
//     $contacts = [];
//     $faker = Faker::create();
//     for ($i = 1; $i <=10; $i++) {
//         $contact[]= [
//             'name' => $faker->name,
//             'email' => $faker->unique()->safeEmail,
//             'phone' => $faker->phoneNumber
//         ];     
//     };
//     return view("login", ['contacts' => $contacts]);
// });
Route::get("/login", function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber
        ];
    };
    return view("contact", ['contacts' => $contacts]);
});


Route::get("/register", function () {
    return view("register");
});

Route::get("/homepage", function () {
    return view("homepage");
});



