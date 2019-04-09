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

Route::get('login', function () {
    return view('login');
});

Route::get('index', function () {
    return view('index');
});

Route::get('form', function () {
    return view('form');
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
