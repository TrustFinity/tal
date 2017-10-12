<?php

use Illuminate\Database\Seeder;
use App\Models\Questions\SurveyQuestion;
use App\Models\Responses\QuestionResponse;

class ResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create();
    	// QuestionResponse::truncate();
    	foreach (SurveyQuestion::all() as $survey_question) {
            QuestionResponse::create([
                'survey_id' => $survey_question->survey->id,
                'survey_question_id' => $survey_question->id,
                'answer' => 'Mwaka is awesome',
            ]);
    	}
        // , 'No his friends makes him awesome', 'He is not awesome'])
    }
}
