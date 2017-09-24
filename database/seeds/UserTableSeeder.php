<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	        
		$rol = Role::where('name', 'Administrador')->first();	    
	    $administrador = new User();
	    $administrador->name = 'Administrador';
	    $administrador->email = 'admin@admin.com';
	    $administrador->password = bcrypt('admin');
	    $administrador->save();
	    $administrador->roles()->attach($rol);
/*
		$role_usuario  = Role::where('name', 'Usuario')->first();
	    $usuario = new User();
	    $usuario->name = 'Usuario';
	    $usuario->email = 'user@user.com';
	    $usuario->password = bcrypt('user');
	    $usuario->save();
	    $usuario->roles()->attach($role_usuario);
*/
    }
}
