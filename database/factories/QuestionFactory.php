<?php

use App\Models\Surveys\Survey;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Questions\SurveyQuestion::class, function (Faker\Generator $faker) {
    $survey_id = Survey::inRandomOrder()->first()->id;
    return [
        'survey_id' => $survey_id,
        'question' => $faker->name
    ];
});
