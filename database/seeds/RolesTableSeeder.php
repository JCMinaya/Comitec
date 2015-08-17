<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = array('Presidente', 'Vice Presidente','Secretario','Vocal', 'Tesorero');

        foreach ($roles as $role) {
        	$role = App\Role::create(array(
        		'role_name' => $role
        	));
        }
    }
}
