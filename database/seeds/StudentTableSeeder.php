<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\User;

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
            if (!$i) {
                $student = User::create(array(
                    'name' => 'test',
                    'last_name' => 'Perez',
                    'email' => '1054485@est.intec.edu.do',
                    'gender' => array_rand($gender),
                    'password' => Hash::make('secret'),
                    'member' => true,
                    'comite_id' => 2
                ));
            }
        	$student = User::create(array(
        		'name' => $faker->name,
        		'last_name' => $faker->lastName,
        		'email' => $faker->unique()->numberBetween($min = 1000000, $max = 1070000) . '@est.intec.edu.do',
        		'password' => Hash::Make($faker->word),
        		'gender' => array_rand($gender),
                'member' => false
        	));
        }
    }
}
