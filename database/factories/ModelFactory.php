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
$factory->define(medellintimes\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(medellintimes\Noticia::class, function (Faker\Generator $faker) {
    return [
        'titulo'=> $faker->words(5, true),
        'image' => $faker->imageUrl(600, 338),
        'descripcion' => $faker->words(7, true),
        'texto' => $faker->realText()
    ];
});

$factory->define(medellintimes\Evento::class, function (Faker\Generator $faker) {
    return [
        'titulo'=> $faker->words(5, true),
        'image' => $faker->imageUrl(600, 338),
        'descripcion' => $faker->words(7, true),
        'hora' =>$faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'hora1' => rand(1,24)
    ];
});


$factory->define(medellintimes\Publicidade::class, function (Faker\Generator $faker) {
    return [
        'titulo'=> $faker->words(5, true),
        'image' => $faker->imageUrl(600, 338),
        'descripcion' => $faker->words(7, true),
        'por' => $faker->name($gender = null|'male'|'female'),
        'texto' => $faker->realText(),
        'empresa' => $faker->firstName($gender = null|'male'|'female')
    ];
});
