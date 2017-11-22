<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        blog\Models\User::states('admin')
            ->create([
                'name'=>'admin',
                'email'=>'admin@admin',
                'password'=>bcrypt('admin')
            ]);
        blog\Models\User::states('admin')
            ->create([
                'name'=>'Walisson Rodrigo',
                'email'=>'walissonrodrigo@outlook.com',
                'password'=>bcrypt('97498037')
            ]);

        blog\Models\User::create([
            'name'=>'Paulo César',
            'email'=>'usuario@usuario',
            'password'=>bcrypt('123456')
        ]);

    }
}
