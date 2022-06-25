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
    return view('layouts.home');
});

Route::get('/loginview', function () {
    return view('pages.loginview');
});

Route::get('/registerview', function () {
    return view('pages.registerview');
});

Route::get('/category', function () {
    return view('pages.category');
});

Route::get('/article', function () {
    return view('pages.article');
});

Route::get('/forum', function () {
    return view('pages.forum');
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

Route::group(['middleware' => ['auth']], function () {
    // Route Profil
    Route::resource('profil', 'ProfilController')->only([
        'index', 'update'
    ]);
    // Route dengan cara manual
    // Route::get('/profil', 'ProfilController@index');
    // Route::put('/profil/{id}', 'ProfilController@update');
});

Route::group(['middleware' => ['auth']], function () {
    // Route Kategori
    Route::resource('kategori', 'KategoriController');
    // Route dengan cara manual
    // Route::get('/kategori', 'KategoriController@index');
    // Route::get('/kategori/create', 'KategoriController@create');
    // Route::post('/kategori', 'KategoriController@store');
    // Route::get('/kategori/{id}', 'KategoriController@show');
    // Route::get('/kategori/{id}/edit', 'KategoriController@edit');
    // Route::put('/kategori/{id}', 'KategoriController@update');
    // Route::delete('/kategori/{id}', 'KategoriController@destroy');
});

// Route Pertanyaan
Route::resource('pertanyaan', 'PertanyaanController');
// Route dengan cara manual
// Route::get('/pertanyaan', 'PertanyaanController@index');
// Route::get('/pertanyaan/create', 'PertanyaanController@create');
// Route::post('/pertanyaan', 'PertanyaanController@store');
// Route::get('/pertanyaan/{id}', 'PertanyaanController@show');
// Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
// Route::put('/pertanyaan/{id}', 'PertanyaanController@update');
// Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy');


Route::resource('jawaban', 'JawabanController')->only([
    'store'
])->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


