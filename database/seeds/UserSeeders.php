<?php

use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    public function run()
    {
        // Creamos tipos de roles
        $rol = new \App\Role();
        $rol->rol = 'administrador';
        $rol->save();

        $rol = new \App\Role();
        $rol->rol = 'creador';
        $rol->save();

        $rol = new \App\Role();
        $rol->rol = 'consultor';
        $rol->save();

        // Creamos usuario administrador

        $user = new \App\User();
        $user->email          = 'admin@gmail.com';
        $user->user           = 'admin';
        $user->password       = bcrypt('admin');
        $user->first_name     = 'admin';
        $user->last_name      = 'admin'; 
        $user->identity       = '123456789'; 
        $user->role_id        = '1';
        $user->save();
    }
}
