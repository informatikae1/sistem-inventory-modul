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
    return view('welcome');
});

Route::get('/students', 'StudentsController@index');


Route::get('/tabel', 'TabelController@index');

// Routing untuk menu Dashboard
Route::get('/home', 'DashboardController@home');


// Routing untuk menu modul
Route::get('/modul', 'ModulController@index');
Route::get('/modul/create', 'ModulController@create');
Route::post('/modul', 'ModulController@store');
Route::get('/modul/edit/{id}', 'ModulController@edit');
Route::put('/modul/update/{id}', 'ModulController@update');
Route::get('/modul/hapus/{id}', 'ModulController@delete');


// Routing untuk menu cabang
Route::get('/cabang', 'CabangController@index');
Route::get('/cabang/tambah', 'CabangController@create');
Route::post('/cabang', 'CabangController@store');
Route::get('/cabang/edit/{id}', 'CabangController@edit');
Route::put('/cabang/update/{id}', 'CabangController@update');
Route::get('/cabang/hapus/{id}', 'CabangController@delete');



// Routing untuk menu penyerahan
Route::get('/penyerahan', 'PenyerahanController@index');
Route::get('/penyerahan/tambah', 'PenyerahanController@create');
Route::post('/penyerahan', 'PenyerahanController@store');
Route::get('/penyerahan/edit/{id}', 'PenyerahanController@edit');
Route::put('/penyerahan/update/{id}', 'PenyerahanController@update');
Route::get('/penyerahan/hapus/{id}', 'PenyerahanController@delete');


// Routing untuk menu peminjaman
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/peminjaman/tambah', 'PeminjamanController@create');
Route::post('/peminjaman', 'PeminjamanController@store');
Route::get('/peminjaman/edit/{id}', 'PeminjamanController@edit');
Route::put('/peminjaman/update/{id}', 'PeminjamanController@update');
Route::get('/peminjaman/hapus/{id}', 'PeminjamanController@delete');

// Routing untuk menu pengembalian 
Route::get('/pengembalian', 'PengembalianController@index');
Route::get('/pengembalian/tambah', 'PengembalianController@create');
Route::post('/pengembalian', 'PengembalianController@store');
Route::get('/pengembalian/edit/{id}', 'PengembalianController@edit');
Route::put('/pengembaian/update/{id}', 'PengembalianController@update');
Route::get('/pengembalian/hapus/{id}', 'PengembalianController@delete');

// Routing untuk menu stok modul
Route::get('/stok', 'StokController@index');
Route::get('/stok/tambah', 'StokController@create');
Route::post('/stok', 'StokController@store');
Route::get('/stok/edit/{id}', 'StokController@edit');
Route::put('/stok/update/{id}', 'StokController@update');
Route::get('/stok/hapus/{id}', 'StokController@delete');