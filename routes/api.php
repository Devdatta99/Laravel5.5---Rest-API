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

//Lisitng Articles
Route::get('articles', 'ArticleController@index');

//List single article
Route::get('articles/{id}', 'ArticleController@show');

//Create a article
Route::post('article', 'ArticleController@store');

//Update a article
Route::put('article', 'ArticleController@store');

//Delete a article
Route::delete('article', 'ArticleController@destroy');
