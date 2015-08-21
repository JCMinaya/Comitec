<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\RoleController;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array('Presidente', 'Vicepresidente','Secretario','Vocal', 'Tesorero');
        foreach ($roles as $role) {
        	$role = App\Role::create(array(
        		'role_name' => $role
        	));
        }
    }
}
