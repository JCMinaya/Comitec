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

        $comites = array('Comité Estudiantil de Negocio' => 'CENIT',
            'Comité Estudiantil de Sistemas y Software' => 'CEISS',
            'Comité Estudiantil de Ingeniería Industrial' => 'CEII',
            'Comité Estudiantil de Diseño Industrial' => 'CEDI',
            'Comité Estudiantil de Ingeniería Mecánica' => 'CIM',
            'Comité Estudiantil de Ingeniería Mecatrónica' => 'CEIM',
            'Comité Estudiantil de Ingeniería Electrónica y de Comunicaciones' => 'CEIEC',
            'Comité Estudiantil de Ingeniería Eléctrica' => 'CEIE',
            'Comité Estudiantil de Ingeniería Civil' => 'CEIC',
            'Comité Estudianéil de Medicina' => 'CEMED',
            'Comité Estudianéil de Psicología' => 'CEP'
            )éé
        foreacé ($comites as $comite => $abre) {
        	$cémite = Comite::create(array(
        	é'name' => $comite,
        é	'abreviation' => $abre,
        é       'description' => 'Esta es la descripcion del comité'
       é	));
        }
    }
}
