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
    Route::get('/postagems', 'Blog\BlogController@postagems');
    Route::get('/postar', 'Blog\BlogController@postar')->middleware('can:Criar');
    Route::post('/postar', 'Blog\BlogController@armazenar')->middleware('can:Criar');
    Route::get('/editar/{id}', 'Blog\BlogController@editar')->middleware('can:Editar');
    Route::put('/editar', 'Blog\BlogController@atualizar')->middleware('can:Editar');
    Route::get('/posts/{id}/comentarios', 'Blog\BlogController@comentar')->middleware('can:Criar');
    Route::put('/posts/comentario/{id_comentario}/editar', 'Blog\BlogController@editarComentario')->middleware('can:Editar');
});

Route::group(['prefix'=>'/admin', 'as'=>'admin.'], function(){
    Route::group(['middleware'=>'auth'], function (){
        Route::get('/', 'Admin\AdminController@index')->middleware('can:Visualizar');
        /*
        Route::get('/postagem/{id}', 'Blog\BlogController@detalhes')->middleware('can:Visualizar');        
        Route::get('/postagems', 'Admin\AdminController@postagems')->middleware('can:Visualizar');
        Route::get('/cadastrar', 'Admin\AdminController@cadastrar')->middleware('can:Criar');
        Route::post('/cadastrar', 'Admin\AdminController@armazenar');        
        Route::get('/editar/{id}', 'Admin\AdminController@editar')->middleware('can:Editar');
        Route::put('/editar', 'Admin\AdminController@atualizar');
        Route::put('/deletar', 'Admin\AdminController@deletar')->middleware('role:Administrador');
        */
        Route::get('/postagens', 'Admin\PostagemController@index')->middleware('can:Visualizar');
        Route::get('/postagem/{id}', 'Admin\PostagemController@postagem')->middleware('can:Visualizar');
        Route::get('postagens/cadastrar', 'Admin\PostagemController@cadastrar')->middleware('can:Criar');
        Route::post('postagens/cadastrar', 'Admin\PostagemController@armazenar')->middleware('can:Criar');        
        Route::get('postagens/{id}/editar', 'Admin\PostagemController@editar')->middleware('can:Editar');
        Route::put('postagens/{id}', 'Admin\PostagemController@atualizar')->middleware('can:Editar');
        Route::delete('postagens/deletar', 'Admin\PostagemController@deletar')->middleware('role:Administrador');

        Route::get('/comentarios', 'Admin\ComentarioController@index')->middleware('can:Visualizar');
        Route::get('comentarios/cadastrar', 'Admin\ComentarioController@cadastrar');
        Route::post('comentarios/cadastrar', 'Admin\ComentarioController@armazenar');        
        Route::get('comentarios/{id}/editar/', 'Admin\ComentarioController@editar');
        Route::put('comentarios/{id}', 'Admin\ComentarioController@atualizar');
        Route::delete('comentarios/deletar', 'Admin\ComentarioController@deletar');

        Route::group(['middleware'=>'role:Administrador'], function (){
            Route::get('/permissoes', 'Admin\PermissaoController@index');
            Route::get('permissoes/cadastrar', 'Admin\PermissaoController@cadastrar');
            Route::post('permissoes/cadastrar', 'Admin\PermissaoController@armazenar');        
            Route::get('permissoes/editar', 'Admin\PermissaoController@editar');
            Route::put('permissoes/editar/{id}', 'Admin\PermissaoController@atualizar');
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
        });
    });
});

Auth::routes();