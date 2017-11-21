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

Route::get('/','PostsController@posts');

Route::get('/detail/{id}', ['as'=>'/detail', 'uses'=>'PostsController@detail']);

Route::get('/about', 'BlogController@about');


Route::get('/contact', function (){
   return view('blog.contactUs');
});

Route::get('/posts', 'PostsController@form');

Route::post('/post/create', 'PostsController@create');

Route::post('/create/comment', 'PostsController@comment');

Route::get('/home', function (){
   return redirect()->route('admin.home');
});

Auth::routes();

Route::group(['prefix'=>'admin', 'as'=>'admin.'], function(){
    Route::group(['middleware'=>'can:access-admin'], function (){
        Route::get('/home', 'HomeController@index')->name('home');
    });
});
