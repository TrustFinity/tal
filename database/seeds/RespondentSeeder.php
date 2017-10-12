<?php

use Illuminate\Database\Seeder;
use App\Models\Respondents\SurveyRespondent;

class RespondentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SurveyRespondent::truncate();
    	for ($i=0; $i < 2 ; $i++) {
        	factory(SurveyRespondent::class)->make()->save();
    	}
    }
}
