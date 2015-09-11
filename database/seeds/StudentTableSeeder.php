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
                    'name' => 'Juan Carlos',
                    'last_name' => 'Minaya',
                    'email' => '1054485@est.intec.edu.do',
                    'gender' => array_rand($gender),
                    'password' => Hash::make('secret'),
                    'member' => true,
                    'comite_id' => 2,
                    'role_id' => 1,
                    'major_id' => 2
                ));
            }
            elseif ($i == 1) {
                $student = User::create(array(
                    'name' => 'Diego',
                    'last_name' => 'Hilario',
                    'email' => '1054444@est.intec.edu.do',
                    'gender' => array_rand($gender),
                    'password' => Hash::make('segura'),
                    'member' => false,
                    'comite_id' => 4,
                    'major_id' => 3
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
