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

Route::get('/hello-world', function () {
    return '<h1>hello world</h1>';
});

Route::get('/about', function () {
    return '<h1>This is the about page</h1>';
});

Route::get('/hello', 'HelloController@hello');
