<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('user/edit/{id}', 'UController@edit')->name('user.edit');
Route::post('user/edit/{id}', 'UController@update')->name('user.edit');

Route::get('/home', 'HomeController@index');

Route::get('user/pokemon/{id}', 'UController@select')->name('user.pokemon');
Route::post('user/pokemon/{id}', 'UController@save')->name('user.pokemon');

Route::get('user/mypokemons/{id}', 'UController@mypo')->name('user.mypokemons');

Route::get('user/mydelete/{id}', 'UController@abandon')->name('user.mydelete');

Route::get('user/strength/{id}', 'UController@myStrength')->name('user.strength');

Route::get('pokemon/show', 'PokemonController@show')->name('pokemon.show');

Route::get('pokemon/add', 'PokemonController@create')->name('pokemon.add');
Route::post('pokemon/add', 'PokemonController@store')->name('pokemon.add');

Route::get('pokemon/edit/{id}', 'PokemonController@edit')->name('pokemon.edit');
Route::post('pokemon/edit/{id}', 'PokemonController@update')->name('pokemon.edit');

Route::get('pokemon/delete/{id}', 'PokemonController@delete')->name('pokemon.delete');
