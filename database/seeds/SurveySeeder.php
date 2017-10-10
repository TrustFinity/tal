<?php

use App\Models\Surveys\Survey;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::truncate();
        for ($i=0; $i < 5; $i++) {
        	factory(Survey::class)->make()->save();
        }
    }
}
