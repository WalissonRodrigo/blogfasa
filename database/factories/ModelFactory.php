<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(blog\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];

});

$factory->define(blog\Models\Posts::class,
    function(Faker\Generator $faker){

    return[
        'titulo'=>$faker->sentence,
        'conteudo'=>$faker->paragraph,
    ];
});

$factory->define(blog\Models\Comentarios::class, function(Faker\Generator $faker){
    return[
        'nome'=>$faker->word,
        'email'=>$faker->email,
        'comentario'=>$faker->paragraph,
    ];
});

$factory->define(blog\Models\Tags::class, function(Faker\Generator $faker){
    return[
        'nome'=>$faker->word,
    ];
});
