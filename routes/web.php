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
Route::get('/git', function () {
    return view('git');

});




Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dbtest', 'dbtestController@index')->name('dbtest');
Route::get('/chat', function () {
        return view('chat');
    })->middleware('auth');

Route::get('/profile', 'UserController@profile')->middleware('auth');
Route::get('/test', function () {
    return view('test');

});

Route::get('/bootstrap', function () {
    return view('boot');

});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');

});

Route::resource('shares', 'ShareController');