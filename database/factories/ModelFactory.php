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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;
    $rank = $faker->numberBetween($min = 0, $max = 1);
    $plan_id = null;
    if($rank == 1){
        $plan_id = $faker->numberBetween($min = 1, $max = 2);
    } else{
        $plan_id = 3;
    }

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'rank' => $rank,
        'plan_id' => $plan_id
    ];
});
