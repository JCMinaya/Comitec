<?php

use Illuminate\Database\Seeder;
use App\User;
class MembersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = User::create(array(
                    'name' => 'Roberto',
                    'last_name' => 'Mercado',
                    'email' => '1053838@est.intec.edu.do',
                    'gender' => 0,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 9,
                    'role_id' => 1,
                    'major_id' => 2
                ));

	$student = User::create(array(
                    'name' => 'Laura Patricia',
                    'last_name' => 'Castillo',
                    'email' => '1054253@est.intec.edu.do',
                    'gender' => 1,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 7,
                    'role_id' => 1,
                    'major_id' => 9
                ));

	$student = User::create(array(
                    'name' => 'Dannerys Mabel',
                    'last_name' => 'Lora',
                    'email' => '1053732@est.intec.edu.do',
                    'gender' => 1,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 3,
                    'role_id' => 1,
                    'major_id' => 4
                ));
	$student = User::create(array(
                    'name' => 'Xavier',
                    'last_name' => 'Paez',
                    'email' => '1053632@est.intec.edu.do',
                    'gender' => 0,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 2,
                    'role_id' => 1,
                    'major_id' => 8
                ));
	$student = User::create(array(
                    'name' => 'Charlotte Pilier',
                    'last_name' => 'Montes De Oca',
                    'email' => '1057166@est.intec.edu.do',
                    'gender' => 1,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 10,
                    'role_id' => 1,
                    'major_id' => 15
                ));
	$student = User::create(array(
                    'name' => 'Lucia Carolina',
                    'last_name' => 'Medina Gomez',
                    'email' => '1053589@est.intec.edu.do',
                    'gender' => 1,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 6,
                    'role_id' => 1,
                    'major_id' => 7
                ));

	$student = User::create(array(
                    'name' => 'Saray Graciela',
                    'last_name' => 'Figuereo Roa',
                    'email' => '1053572@est.intec.edu.do',
                    'gender' => 1,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 11,
                    'role_id' => 1,
                    'major_id' => 16
                ));

    }
}