<?php

use Illuminate\Database\Seeder;
use blog\Models\Role;
use blog\Models\Permission;
use Illuminate\Database\Schema\Builder;


class PermissionsToRolesTableSeeder extends Seeder
{
    public function run()
    {
        $adicionar = Permission::where('name','=', 'Criar')->value('id');
        $editar = Permission::where('name','=', 'Editar')->value('id');
        $visualizar = Permission::where('name','=', 'Visualizar')->value('id');
        $deletar = Permission::where('name','=', 'Apagar')->value('id');
        
        $admin = Role::where('name','=', 'Administrador')->first();
        $moderador = Role::where('name','=', 'Moderador')->first();
        $usuario = Role::where('name','=', 'Usuario')->first();

        $admin->permissions()->sync([$adicionar, $editar, $visualizar, $deletar]);
        $moderador->permissions()->sync([$adicionar, $editar, $visualizar, $deletar]);
        $usuario->permissions()->sync([$adicionar, $editar, $visualizar]);

    }
}
