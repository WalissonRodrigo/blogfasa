<?php

use Illuminate\Database\Seeder;
use blog\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name'=>'Administrador',
            'label'=>'Permissão Total no Sistema.'
        ]);

        Role::create([
            'name'=>'Moderador',
            'label'=>'Visualiza, Edita, Cria - Posts, Tags, Comentários. Apaga - Comentários.'
        ]);

        Role::create([
            'name'=>'Usuario',
            'label'=>'Posta, Edita seu próprio Post, Visualiza Posts, Comenta e participa dos comentários.'
        ]);
    }
}
