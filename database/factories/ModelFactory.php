<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'newsletter' => 'yes',
        'remember_token' => str_random(10),
    ];
});




$factory->define(App\Album::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence(1),
        'description' => $faker->sentence(10),
        'user_id' => random_int(1,3),
    ];
});


$factory->define(App\Photo::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->sentence(1),
        'url' => $faker->url,
        'type' => $faker->mimeType,
        'album_id' => rand(1, 20),
    ];
});

