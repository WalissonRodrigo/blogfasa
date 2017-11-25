<?php

use Illuminate\Database\Seeder;
use blog\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
            'name'=>'Visualizar',
            'Label'=>'Vê conteúdos.'
        ]);
        Permission::create([
            'name'=>'Criar',
            'Label'=>'Cria Conteúdos'
        ]);
        Permission::create([
            'name'=>'Editar',
            'Label'=>'Altera os Conteúdos Criados'
        ]);
        Permission::create([
            'name'=>'Apagar',
            'Label'=>'Apaga conteúdos existentes.'
        ]);
    }
}
