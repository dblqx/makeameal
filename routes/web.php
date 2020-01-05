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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('makeameal', function(){
//  return '<h1>make a meal</h1>';
//});

//Route::get('recipe', function(){
//  return '<h1>Recipe</h1>';
//});

Route::resource('user','UsersController');

/*Route::get('showname/{name}','HelloController@showHello');
Route::get('showproduct/{product}','HelloController@resultProduct');
*/
