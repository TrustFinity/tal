<?php

use App\User;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Surveys\Survey::class, function (Faker\Generator $faker) {
    $user_id = User::inRandomOrder()->first()->id;
    return [
        'user_id' => $user_id,
        'name' => $faker->name,
        'description' => $faker->sentence
    ];
});
