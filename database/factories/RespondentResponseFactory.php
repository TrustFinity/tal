<?php

use App\Models\Questions\SurveyQuestion;
use App\Models\Respondents\SurveyRespondent;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Responses\RespondentResponse::class, function (Faker\Generator $faker) {

	$survey_respondent_id = SurveyRespondent::inRandomOrder()->first()->id;
	$survey_question = SurveyQuestion::inRandomOrder()->first();
	$survey_id = $survey_question->survey->id;
	$responses = $survey_question->responses;
    return [
        'survey_id' => $survey_id,
        'survey_question_id' => $survey_question->id,
        'survey_respondent_id' => $survey_respondent_id,
        'answer' => $responses->first()->answer ?: 'Mwaka is too awesome',
    ];
});
