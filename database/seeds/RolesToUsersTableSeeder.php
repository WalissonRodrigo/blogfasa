<?php

use Illuminate\Database\Seeder;
use blog\Models\User;
use blog\Models\Role;
use Illuminate\Database\Schema\Builder;

class RolesToUsersTableSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::where('name','=', 'Administrador')->first();
        $moderador = Role::where('name','=', 'Moderador')->first();
        $usuario = Role::where('name','=', 'Usuario')->first();
        
        $userAdmin = User::where('email','=', 'walissonrodrigo@outlook.com')->first();
        $userModerador = User::where('email','=', 'admin@admin')->first();
        $userUsuario = User::where('email','=', 'usuario@usuario')->first();

        $userAdmin->roles()->sync($admin);
        $userModerador->roles()->sync($moderador);
        $userUsuario->roles()->sync($usuario);
    }
}
