<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserSeeder::class);
        $this->call(SurveySeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(ResponseSeeder::class);
        $this->call(RespondentSeeder::class);
        $this->call(RespondentResponseSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
