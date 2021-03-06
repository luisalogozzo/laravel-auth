<?php

use Illuminate\Support\Facades\Route;

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
    return view('guests.welcome');
});

Route::resource('posts','PostController');

Auth::routes();

Route::get('/home', 'Admin\HomeController@index')->name('admin.home');


Route::name('admin.')
->prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function() {
    Route::resource('posts','PostController');
    Route::resource('comments','CommentController');

});
