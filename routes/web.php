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
    Route::get('/home', 'Blog\HomeController@index')->name('home');
});

Route::group(['prefix'=>'/admin', 'as'=>'admin.', 'middleware'=>'auth'], function(){
    Route::group(['middleware'=>'can:admin'], function (){
        Route::resource('/', 'Admin\AdminController');
        Route::resource('/postagens', 'Admin\PostagemController');
        Route::resource('/permissoes', 'Admin\PermissaoController');
        Route::resource('/funcoes', 'Admin\FuncaoController');
        Route::resource('/comentarios', 'Admin\PostagemController');
    });

    Route::group(['middleware'=>'can:moderador'], function(){
        Route::resource('/postagens', 'Admin\PostagemController');
        Route::resource('/comentarios', 'Admin\PostagemController');
    });
});

Auth::routes();