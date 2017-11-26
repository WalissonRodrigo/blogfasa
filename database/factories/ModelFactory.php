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
    $image = [ 
        'https://fato.info/wp-content/uploads/2015/11/Faculdade-de-Tecnologia-Gr%C3%A1fica.jpg',
        'https://fato.info/wp-content/uploads/2015/11/Tecnologia.jpg', 
        'https://thumbs.dreamstime.com/b/os-n%C3%BAmeros-das-matem%C3%A1ticas-representam-alta-tecnologia-e-faculdade-42014571.jpg',
        'https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?img=img_63_170918_005b17f1-7e86-40d7-9704-a93ba2125b0b_o.jpg',
        'http://noticias.universia.com.br/net/images/educacion/b/bo/bol/bolsa-faculdade-tecnologia.jpg',
        'https://abrilexame.files.wordpress.com/2016/09/size_960_16_9_curso-online10.png',
        'https://faculdade.ienh.com.br/Cover/evento-gratuito-de-tecnologia-abordara-redes-lan-100-em-fibra-optica.jpg',
        'https://mdbootstrap.com/img/Photos/Others/city10.jpg',
        'https://hypescience.com/wp-content/uploads/2013/05/130.jpg',
        'http://ig-wp-colunistas.s3.amazonaws.com/secondlife/wp-content/uploads/2008/03/themroc4.jpg',
        'http://www.hunterdouglas.com.br/wcp/blog/imagens/posts/capas/shutterstock_164665634-1424446595.jpg',
        'http://media.afar.com/uploads/images/post_images/images/oj35hpvD6h/post_display_open-uri20140202-675-1g8cvxf',
        'https://www.bing.com/az/hprichbg/rb/RhoneRiverDusk_PT-BR9143412025_1920x1080.jpg',
        'https://www.bing.com/az/hprichbg/rb/SaoPauloCopan_PT-BR12064171072_1920x1080.jpg',
        'https://www.bing.com/az/hprichbg/rb/TurkeyTail_PT-BR10651209781_1920x1080.jpg',
        'https://www.bing.com/az/hprichbg/rb/LeuchtturmWarnemuende_PT-BR8137822331_1920x1080.jpg',
        'https://www.bing.com/az/hprichbg/rb/ChildrenofEarth_PT-BR11097669458_1920x1080.jpg',
        'https://s-media-cache-ak0.pinimg.com/736x/94/09/f4/9409f4d00e217e4b06ed85cebee3bb47.jpg',
        ''
    ];
    return[
        'titulo'=>$faker->sentence,
        'conteudo'=>$faker->paragraph,
        'image_1' => $image[rand(0, 18)],
        'image_2' => $image[rand(0, 18)]
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
