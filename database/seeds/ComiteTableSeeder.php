<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Comite;

class ComiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $comites = array("Civil", "Industrial", "Software y Sistemas", "Mecatrónica", "Electrónica", "Diseño Industrial", "Medicina", "Psicología");
        $i = 0;

        foreach ($comites as $comite) {
        	$comite = Comite::create(array(
        		'name' => $comite,
        		'type_id' => $faker->randomDigitNotNull,
        		'president_id' => ++$i,
        		'vicepresident_id' => ++$i,
        		'secretary_id' => ++$i,
        		'vocal_id' => ++$i,
        		'treasurer_id' => ++$i,
        	));
        }
    }
}
