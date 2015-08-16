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

        $comites = array('Comite Estudiantíl de Negocio' => 'CENIT',
            'Comite Estudiantíl de Sistemas y Software' => 'CEISS',
            'Comite Estudiantíl de Ingeniería Industrial' => 'CEII',
            'Comite Estudiantíl de Mecánica' => 'CIM'
            );

        foreach ($comites as $comite => $abre) {
        	$comite = Comite::create(array(
        		'name' => $comite,
        		'abreviation' => $abre,
                'description' => 'Esta es la descripcion del comité'
        	));
        }
    }
}
