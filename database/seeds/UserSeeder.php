<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker::create('ko_KR');

        //for($i=1; $i<=20; $i++){
        	
        DB::table('user')->insert([
    	'username' => 'nnn',  
    	'password' => 'nnn',
    	'level'    => '2'
    	]);

       // }
    }
}
