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

Route::get('master', function () {
    return view('master');
});

Route::get('formpesan', function () {
    return view('formpesan');
});

Route::get('formbeli', function () {
    return view('formbeli');
});

Route::get('formjual', function () {
    return view('formjual');
});

Route::get('formdaftar', function () {
    return view('formdaftar');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/obat', 'ObatController@index');

Route::get('/form', 'ObatController@create');

Route::post('/obat', 'ObatController@store');

//Route::get('/editObat/{id}','ObatController@edit');

//Route::post('/obat','ObatController@update');

//Route::get('/obat/destroy/{id}','ObatController@destroy');


