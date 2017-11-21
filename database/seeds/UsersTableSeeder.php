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
        factory(blog\Models\User::class, 1)
            ->states('admin')
            ->create([
                'name'=>'admin',
                'email'=>'admin@admin',
                'password'=>bcrypt('admin')
            ]);
            factory(blog\Models\User::class, 1)
            ->states('admin')
            ->create([
                'name'=>'Walisson Rodrigo',
                'email'=>'walissonrodrigo@outlook.com',
                'password'=>bcrypt('97498037')
            ]);

        factory(blog\Models\User::class, 1)
            ->create([
                'name'=>'Paulo César',
                'email'=>'usuario@usuario',
                'password'=>bcrypt('123456')
            ]);

    }
}
