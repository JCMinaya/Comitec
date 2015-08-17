<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        $gender = Array('Masculino', 'Femenino');

        for ($i=0; $i < 40; $i++) { 
        	$student = Student::create(array(
        		'name' => $faker->name,
        		'last_name' => $faker->lastName,
        		'email' => $faker->unique()->numberBetween($min = 1000000, $max = 1070000) . '@est.intec.edu.do',
        		'password' => $faker->word,
        		'gender' => array_rand($gender),
        		'is_member' => 0
        	));
        }
    }
}
