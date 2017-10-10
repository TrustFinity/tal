<?php

use Illuminate\Database\Seeder;
use App\Models\Responses\RespondentResponse;
use App\Models\Respondents\SurveyRespondent;

class RespondentResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	RespondentResponse::truncate();
    	for ($i=0; $i < SurveyRespondent::all()->count(); $i++) {
    		factory(RespondentResponse::class)->make()->save();
    	}
    }
}
