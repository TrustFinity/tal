<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Respondents\SurveyRespondent::class, function (Faker\Generator $faker) {

	return [
		'first_name' => $faker->firstName,
		'middle_name' => $faker->lastName,
		'last_name' => $faker->lastName,
		'age' => $faker->numberBetween(10, 60),
		'occupation' => $faker->randomElement(['IT/Technology','Engineering', 'Finance', 'Farmer']),
		'email' => $faker->email,
		'city' => $faker->randomElement(['kampala', 'gulu', 'kitgum', 'kumi']),
		'country' => $faker->randomElement(['uganda', 'kenya', 'tanzania', 'rwanda']),
		'facebook_id' => $faker->randomElement([1,2,3,4,5])
	];
});
