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

// Route::get('/ok', function(){
//     return ['status'=> true];
// });

Route::namespace('Api')->name('api.')->group(function(){
	Route::get('/heroes', 'HeroController@index')->name('heroes');
	Route::get('/heroes/{id}', 'HeroController@show')->name('single_hero');

	Route::post('/heroes', 'HeroController@store')->name('heroes_store');
	Route::put('/heroes/{id}', 'HeroController@update')->name('heroes_update');

	Route::delete('/heroes/{id}', 'HeroController@delete')->name('heroes_delete');
	});