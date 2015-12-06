<?php

use Illuminate\Database\Seeder;

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
                    'gender' => 1,
                    'password' => Hash::make('facil123'),
                    'member' => true,
                    'comite_id' => 9,
                    'role_id' => 1,
                    'major_id' => 2
                ));


    }
}
