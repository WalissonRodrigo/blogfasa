<?php

use Illuminate\Database\Seeder;
use blog\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name'=>'Administrador',
            'Label'=>'Permissão Total no Sistema.'
        ]);

        Role::create([
            'name'=>'Moderador',
            'Label'=>'Visualiza, Edita, Cria - Posts, Tags, Comentários. Apaga - Comentários.'
        ]);

        Role::create([
            'name'=>'Usuario',
            'Label'=>'Posta, Edita seu próprio Post, Visualiza Posts, Comenta e participa dos comentários.'
        ]);
    }
}
