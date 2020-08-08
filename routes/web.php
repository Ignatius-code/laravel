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
    return view('CRUD.index');
});
// Route::get('/register', function () {
//     return view('register');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@home');
// Route::get('/register', 'AuthController@register');
// Route::get('/welcome', 'AuthController@welcome');

Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@show');
Route::get('/pertanyaan/{pertanyaan_id}/edit', 'PertanyaanController@edit');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@update');
Route::get('/pertanyaan/{pertanyaan_id}', 'PertanyaanController@destroy');