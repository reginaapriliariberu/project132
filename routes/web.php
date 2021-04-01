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
    return view('halamansaya');
});

Route::view('contact', 'contact');


Route::get('resume', function () {
    return view('resume');
});

Route::get('portofolio', function () {
    return view('profile');
});

Route::get('halaman', function () {
    return view('halamansaya');
});

Route::get('halaman', function () {
    return view('halamansaya');
});

Route::get('profilku', function () {
    return view('profilsaya');
});


Route::get('siswa', 'controllersiswa@list');

Route::get('identitas', 'ProfileControleer@index') -> name('iden');

Route::get('kembali-saya', 'ProfileControleer@index1') -> name('iden1');



