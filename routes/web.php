<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/','Blog\PostsController@posts');

Route::get('/detail/{id}', ['as'=>'/detail', 'uses'=>'Blog\PostsController@detail']);

Route::get('/about', 'Blog\BlogController@about');


Route::get('/contact', function (){
   return view('blog.contactUs');
});

Route::get('/posts', 'Blog\PostsController@form');

Route::post('/post/create', 'Blog\PostsController@create');

Route::post('/create/comment', 'Blog\PostsController@comment');

Route::get('/home', function (){
   return redirect()->route('admin.home');
});
*/

Route::group(['prefix'=>'/', 'as'=>'blog.'], function(){
    Route::get('/', 'Blog\BlogController@index');
    Route::get('/postagem/{id}', 'Blog\BlogController@detalhes');
    Route::get('/postagem', 'Blog\BlogController@postar');
    Route::post('/postagem', 'Blog\BlogController@armazenar');
    Route::get('/editar', 'Blog\BlogController@editar');
    Route::put('/editar/{id}', 'Blog\BlogController@atualizar');
    Route::get('/posts/{id}/comentarios', 'Blog\BlogController@comentar');
    Route::get('/posts/comentario/editar', 'Blog\BlogController@editarComentario');
});

Route::group(['prefix'=>'/admin', 'as'=>'admin.'], function(){
    Route::group(['middleware'=>'auth'], function (){
        Route::get('/', 'Admin\AdminController@index');
        Route::get('/cadastrar', 'Admin\AdminController@cadastrar');
        Route::post('/cadastrar', 'Admin\AdminController@armazenar');        
        Route::get('/editar/{id}', 'Admin\AdminController@editar');
        Route::put('/editar', 'Admin\AdminController@atualizar');
        Route::put('/deletar', 'Admin\AdminController@deletar');

        Route::get('/postagens', 'Admin\PostagemController@index');
        Route::get('postagens/cadastrar', 'Admin\PostagemController@cadastrar');
        Route::post('postagens/cadastrar', 'Admin\PostagemController@armazenar');        
        Route::get('postagens/editar/{id}', 'Admin\PostagemController@editar');
        Route::put('postagens/editar', 'Admin\PostagemController@atualizar');


        Route::get('/permissoes', 'Admin\PermissaoController@index');
        Route::get('permissoes/cadastrar', 'Admin\PermissaoController@cadastrar');
        Route::post('permissoes/cadastrar', 'Admin\PermissaoController@armazenar');        
        Route::get('permissoes/editar/{id}', 'Admin\PermissaoController@editar');
        Route::put('permissoes/editar', 'Admin\PermissaoController@atualizar');
        Route::delete('permissoes/deletar', 'Admin\PermissaoController@deletar');

        Route::get('/funcoes', 'Admin\FuncaoController@index');
        Route::get('funcoes/cadastrar', 'Admin\FuncaoController@cadastrar');
        Route::post('funcoes/cadastrar', 'Admin\FuncaoController@armazenar');        
        Route::get('funcoes/editar/{id}', 'Admin\FuncaoController@editar');
        Route::put('funcoes/editar', 'Admin\FuncaoController@atualizar');
        Route::delete('funcoes/deletar', 'Admin\FuncaoController@deletar');

        Route::get('/usuarios', 'Admin\UsuarioController@index');
        Route::get('usuarios/cadastrar', 'Admin\UsuarioController@cadastrar');
        Route::post('usuarios/cadastrar', 'Admin\UsuarioController@armazenar');        
        Route::get('usuarios/editar/{id}', 'Admin\UsuarioController@editar');
        Route::put('usuarios/editar', 'Admin\UsuarioController@atualizar');
        Route::delete('usuarios/deletar', 'Admin\UsuarioController@deletar');

        Route::get('/comentarios', 'Admin\PostagemController@index');
        Route::get('comentarios/cadastrar', 'Admin\PostagemController@cadastrar');
        Route::post('comentarios/cadastrar', 'Admin\PostagemController@armazenar');        
        Route::get('comentarios/editar/{id}', 'Admin\PostagemController@editar');
        Route::put('comentarios/editar', 'Admin\PostagemController@atualizar');
        Route::delete('comentarios/deletar', 'Admin\PostagemController@deletar');
    });
});

Auth::routes();