<?php


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