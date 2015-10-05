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

        $comites = array(
                ['Comité Estudiantil de Negocio','CENIT','intec.cenit@gmail.com'],
                ['Comité Estudiantil de Sistemas y Software','CEISS','comitesoftwaresistemas@gmail.com'],
                ['Comité Estudiantil de Ingeniería Industrial','CEII','ceii.intecrd@gmail.com'],
                ['Comité Estudiantil de Diseño Industrial','CEDI','dinintec@gmail.com'],
                ['Comité Estudiantil de Ingeniería Mecánica','CIM','pendiente@CIM'],
                ['Comité Estudiantil de Ingeniería Mecatrónica','CEIMC','intec.ceimc@gmail.com'],
                ['Comité Estudiantil de Ingeniería Electrónica y de Comunicaciones','CEIEC','pendiente@CEIEC'],
                ['Comité Estudiantil de Ingeniería Eléctrica','CEIE','pendiente@CEIE'],
                ['Comité Estudiantil de Ingeniería Civil','CEIC','ceic.intec00@gmail.com'],
                ['Comité Estudiantil de Medicina','CEMED','cemedintecrd@gmail.com'],
                ['Comité Estudiantil de Psicología','CEPSI','cepsiintecrd@gmail.com']
            );
        
        foreach($comites as $comite) {
        	$comite = Comite::create(array(
            	'name' => $comite[0],
            	'abreviation' => $comite[1],
                'email' => $comite[2],
                'description' => 'Esta es la descripcion del comité.'
           	));
        }
    }
}
