<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Respondents\SurveyRespondent::class, function (Faker\Generator $faker) {

	return [
		'firstname' => $faker->firstName,
		'middle_name' => $faker->lastName,
		'lastname' => $faker->lastName,
		'dob' => $faker->dateTimeBetween('1970-01-01', '2007-12-31'),
		'occupation' => $faker->randomElement(['IT/Technology','Engineering', 'Finance', 'Farmer']),
		'email' => $faker->email,
		'sub_county' => $faker->randomElement(['koro', 'odek', 'awer', 'atiak']),
		'district' => $faker->randomElement(['kampala', 'gulu', 'kitgum', 'kumi']),
		'region' => $faker->randomElement(['north', 'estern', 'western', 'central']),
		'country' => $faker->randomElement(['uganda', 'kenya', 'tanzania', 'rwanda']),
		'facebook_id' => $faker->randomElement([1,2,3,4,5])
	];
});
