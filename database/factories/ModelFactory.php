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
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\agenda::class, function (Faker\Generator $faker) {

    $faker = Faker\Factory::create('es_ES');
    
    $sexoAux = $faker->boolean(75);
    
    $sexo = $sexoAux?"H":"M";
    return [
        'nombre' => $faker->name($sexoAux?'male':'female'),
        'email' => $faker->email,
        'telefono' => $faker->phoneNumber,
        'sexo' => $sexo,
        'observaciones' =>$faker->text
    ];
});

















$factory->define(App\Persona::class, function (Faker\Generator $faker) {
    
    $faker=Faker\Factory::create('es_ES');
    
    return [
        'nombre' => $faker->name,
        'email' => $faker->email,
        'telefono' => $faker->phoneNumber,
        'direccion'=> $faker->address,
        'observaciones' => $faker->text
    ];
});





