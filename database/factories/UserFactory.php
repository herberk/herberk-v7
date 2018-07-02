<?php

/*use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

/*$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'nickname' =>  $faker->unique()->userName,
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'points' => rand(0,100),
        'remember_token' => str_random(10),
        'type' => $faker->randomElement(['user','editor','visit']),
        'active' => $faker->boolean
    ];
});

$factory->define(App\Help::class, function (Faker\Generator $faker) {
    return [
        'pantalla' => $faker->name,
        'default-notes' => $faker->sentence,
        'notes' => $faker->paragraph,

    ];

});

$factory->define(App\Userprofile::class, function (Faker\Generator $faker) {
    static $password;
    return [

        'user_id' => $faker->word,

        'description' => $faker->paragraph
    ];
});