<?php

use Illuminate\Database\Seeder;
use blog\Models\Permission;
class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create([
            'name'=>'Visualizar',
            'label'=>'Vê conteúdos.'
        ]);
        Permission::create([
            'name'=>'Criar',
            'label'=>'Cria Conteúdos'
        ]);
        Permission::create([
            'name'=>'Editar',
            'label'=>'Altera os Conteúdos Criados'
        ]);
        Permission::create([
            'name'=>'Apagar',
            'label'=>'Apaga conteúdos existentes.'
        ]);
    }
}
