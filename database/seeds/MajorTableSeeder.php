<?php

use Illuminate\Database\Seeder;

class MajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $majors = array(
			'Diseño Industrial' => 4,
			'Ingeniería Civil' => 9,
			'Ingeniería Eléctrica' => 8,
			'Ingeniería Industrial' => 3,
			'Ingeniería Mecánica' => 5,
			'Ingeniería de Sistemas' => 2,
			'Ingeniería Mecatrónica' => 6,
			'Ingeniería de Software' => 2,
			'Ingeniería Electrónica y de Comunicaciones' => 7,
			'Administración de Empresas' => 1,
			'Contabilidad' => 1,
			'Mercadeo' => 1,
			'Economía' => 1,
			'Negocios Internacionales' => 1,
			'Medicina' => 10,
			'Psicología' => 11
		);

        foreach ($majors as $major => $value) {
        	$major = \App\Major::create(array(
        		'name' => $major,
        		'comite_id' => $value
        	));
        }

    }
}
