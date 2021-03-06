<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('postagems', 'API\PostagemController@index');
Route::get('postagems/{id}', 'API\PostagemController@postagem');
Route::post('postagems/create', 'API\PostagemController@cadastrar');
Route::put('postagems/{id}/update', 'API\PostagemController@atualizar');
Route::post('postagems/{id}', 'API\PostagemController@deletar');
