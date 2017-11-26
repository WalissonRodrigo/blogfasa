<?php

use Illuminate\Database\Seeder;
use blog\Models\Posts;
use blog\Models\Comentarios;
use blog\Models\Tags;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(blog\Models\Posts::class, 20)->create();

        factory(blog\Models\Tags::class, 20)->create();
        
        factory(Posts::class, 50)->create();
        
    }
}
