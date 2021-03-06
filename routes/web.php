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

Route::get('/','GuestController@index')->name('guest.index');;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//entradas
Route::get('/entries/create', 'EntryController@create')->name('entries.create');
Route::post('/entries', 'EntryController@store')->name('entries.store');

Route::get('/entries/{entryBySlug}', 'GuestController@show')->name('entries.show');

Route::get('/entries/{entry}/edit', 'EntryController@edit')->name('entries.edit');
Route::patch('/entries/{entry}', 'EntryController@update')->name('entries.update');



//user
Route::get('/@{user}', 'UserController@show')->name('user.show');



