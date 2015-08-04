<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');

        for ($i=0; $i < 40; $i++) { 
        	$user = User::create(array(
        		'name' => $faker->userName,
        		'email' => $faker->unique()->numberBetween($min = 1000000, $max = 1070000) . '@est.intec.edu.do',
        		'password' => $faker->word,
        	));
        }
    }
}
