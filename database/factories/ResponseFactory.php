<?php

use App\Models\Questions\SurveyQuestion;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Responses\QuestionResponse::class, function (Faker\Generator $faker) {

	$survey_question = SurveyQuestion::inRandomOrder()->first();
	$survey_id = $survey_question->survey->id;

    return [
        'survey_id' => $survey_id,
        'survey_question_id' => $survey_question->id,
        'answer' => $faker->sentence,
    ];
});
