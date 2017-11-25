<?php

use Illuminate\Database\Seeder;
use blog\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Walisson Rodrigo',
            'email'=>'walissonrodrigo@outlook.com',
            'password'=>bcrypt('97498037'),
        ]);
        
        User::create([
                'name'=>'admin',
                'email'=>'admin@admin',
                'password'=>bcrypt('admin'),
            ]);

        User::create([
            'name'=>'Paulo César',
            'email'=>'usuario@usuario',
            'password'=>bcrypt('123456')
        ]);

    }
}
