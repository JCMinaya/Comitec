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
        // $faker = Faker::create();

        $comites = array('Comite Estudiantíl de Negocio' => 'CENIT',
            'Comite Estudiantíl de Sistemas y Software' => 'CEISS',
            'Comite Estudiantíl de Ingeniería Industrial' => 'CEII',
            'Comite Estudiantíl de Diseño Industrial' => 'CEDI',
            'Comite Estudiantíl de Ingeniería Mecánica' => 'CIM',
            'Comite Estudiantíl de Ingeniería Mecatrónica' => 'CEIM',
            'Comite Estudiantíl de Ingeniería Electrónica y de Comunicaciones' => 'CEIEC',
            'Comite Estudiantíl de Ingeniería Eléctrica' => 'CEIE',
            'Comite Estudiantíl de Ingeniería Civil' => 'CEIC',
            'Comite Estudiantíl de Medicina' => 'CEM',
            'Comite Estudiantíl de Psicología' => 'CEP'
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
