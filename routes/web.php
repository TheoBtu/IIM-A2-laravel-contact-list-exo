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


Auth::routes();

Route::resource('/contacts', 'ContactController');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact','ContactController@index')->name('contact.post');

Route::get('/Addcontact', 'ContactController@create')->name('contact.create');

Route::get('/Modifycontact', 'ContactController@edit')->name('contact.modify');

Route::post('/Addcontact', 'ContactController@create')->name('contact.create');

Route::post('/CreateContact', 'ContactController@store')->name('contact.store');

Route::delete('/deletecontact', 'ContactController@destroy')->name('contact.destroy');



