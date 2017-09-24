<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$rol = new Role();
	    $rol->name = 'Administrador';
	    $rol->description = 'Administrador';
	    $rol->save();

	    $rol_usuario = new Role();
	    $rol_usuario->name = 'Usuario';
	    $rol_usuario->description = 'Usuario';
	    $rol_usuario->save();

    }
}
