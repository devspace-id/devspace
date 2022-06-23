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
    return view('layout.master');
});

// Route Artikel
Route::resource('artikel', 'ArtikelController');
// Route dengan cara manual
// Route::get('/artikel', 'ArtikelController@index');
// Route::get('/artikel/create', 'ArtikelController@create');
// Route::post('/artikel', 'ArtikelController@store');
// Route::get('/artikel/{id}', 'ArtikelController@show');
// Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
// Route::put('/artikel/{id}', 'ArtikelController@update');
// Route::delete('/artikel/{id}', 'ArtikelController@destroy');


// Route Profil
// Route::resource('profil', 'ProfilController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
