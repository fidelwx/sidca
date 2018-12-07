<?php

use Illuminate\Database\Seeder;

class UserSeeders extends Seeder
{
    public function run()
    {
        $roles = array('administrador','creador','consultor');
        // Creamos tipos de roles
        foreach ($roles as $role) {
            $rol = new \App\Role();
            $rol->rol = $role;
            $rol->save();
        }

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
