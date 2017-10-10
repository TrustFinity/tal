<?php

use Illuminate\Database\Seeder;
use App\Models\Questions\SurveyQuestion;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	SurveyQuestion::truncate();
        for ($i=0; $i < 10 ; $i++) {
        	factory(SurveyQuestion::class)->make()->save();
        }
    }
}
