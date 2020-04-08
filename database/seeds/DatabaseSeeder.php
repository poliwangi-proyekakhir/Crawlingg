<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');

        for($i=1; $i<=20; $i++){
         DB::table('user')->insert([
    	'username' => $faker->name,  
    	'password' => $faker->jobTitle,
    	'level'    => '2'
    	]);
     }
    }
}
