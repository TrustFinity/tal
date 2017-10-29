<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
    	// $user = factory(User::class)->make();
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@tal.com';
        $user->password = bcrypt('secret');
        $user->remember_token = str_random(10);
    	$user->save();
    }
}
