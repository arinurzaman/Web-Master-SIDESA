<?php

use Illuminate\Support\Facades\Auth;
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
    // return view('admin/layouts/dashboard');
    return view('login');
});

//Login
Route::get('/login','LoginController@index')->name('login');
Route::post('login/cek', 'LoginController@cek');
Route::get('logout', 'LoginController@Logout');


Route::group(['middleware' => 'auth', 'checkRole:Administrator, Kepala Desa'], function(){

    Route::get('/dashboard', 'DasborController@index');

    //data-warga
    Route::get('/warga', 'WargaController@index')->name('warga');
    Route::get('/warga/{id}/detail', 'WargaController@detail');
    Route::post('/warga/create', 'WargaController@create');
    Route::get('/warga/{id}/edit', 'WargaController@edit');
    Route::post('/warga/{id}/update', 'WargaController@update');
    Route::get('/warga/{id}/delete', 'WargaController@delete');
    Route::get('/warga/download', 'WargaController@download');
    Route::post('/warga/import', 'WargaController@wargaimport');

    //data-user
    Route::get('/user', 'UserController@index');
    Route::post('/user/create', 'UserController@create');

    //surat-domisili
    Route::get('/domisili', 'DomisiliController@index')->name('domisili');
    Route::get('/domisili/{id}/detail', 'DomisiliController@detail');
    Route::get('/domisili/{id}/delete', 'DomisiliController@delete');
    Route::get('/domisili/{id}/edit', 'DomisiliController@edit');
    Route::post('/domisili/{id}/update', 'DomisiliController@update');
    Route::get('/domisili/{id}/confirm', 'DomisiliController@confirm');
    Route::get('/domisili/{id}/tolak', 'DomisiliController@tolak');
    Route::get('/domisili/{id}/selesai', 'DomisiliController@selesai');
    Route::get('/domisili/{id}/cetakPdf', 'DomisiliController@cetakPdf');

    // surat-kematian
    Route::get('/kematian', 'KematianController@index')->name('kematian');
    Route::get('/kematian/{id}/detail', 'KematianController@detail');
    Route::get('/kematian/{id}/delete', 'KematianController@delete');
    Route::get('/kematian/{id}/edit', 'KematianController@edit');
    Route::post('/kematian/{id}/update', 'KematianController@update');
    Route::get('/kematian/{id}/confirm', 'KematianController@confirm');
    Route::get('/kematian/{id}/tolak', 'KematianController@tolak');
    Route::get('/kematian/{id}/selesai', 'KematianController@selesai');
    Route::get('/kematian/{id}/cetakPdf', 'KematianController@cetakPdf');

    //sku
    Route::get('/sku', 'SkuController@index')->name('sku');
    Route::get('/sku/{id}/detail', 'SkuController@detail');
    Route::get('/sku/{id}/delete', 'SkuController@delete');
    Route::get('/sku/{id}/edit', 'SkuController@edit');
    Route::post('/sku/{id}/update', 'SkuController@update');
    Route::get('/sku/{id}/confirm', 'SkuController@confirm');
    Route::get('/sku/{id}/tolak', 'SkuController@tolak');
    Route::get('/sku/{id}/selesai', 'SkuController@selesai');
    Route::get('/sku/{id}/cetakPdf', 'SkuController@cetakPdf');

    //kelahiran
    Route::get('/kelahiran', 'KelahiranController@index')->name('kelahiran');
    Route::get('/kelahiran/{id}/detail', 'KelahiranController@detail');
    Route::get('/kelahiran/{id}/delete', 'KelahiranController@delete');
    Route::get('/kelahiran/{id}/edit', 'KelahiranController@edit');
    Route::post('/kelahiran/{id}/update', 'KelahiranController@update');
    Route::get('/kelahiran/{id}/confirm', 'KelahiranController@confirm');
    Route::get('/kelahiran/{id}/tolak', 'KelahiranController@tolak');
    Route::get('/kelahiran/{id}/selesai', 'KelahiranController@selesai');
    Route::get('/kelahiran/{id}/cetakPdf', 'KelahiranController@cetakPdf');

    //blmnikah
    Route::get('/blmnikah', 'BlmnikahController@index')->name('blmnikah');
    Route::get('/blmnikah/{id}/detail', 'BlmnikahController@detail');
    Route::get('/blmnikah/{id}/delete', 'BlmnikahController@delete');
    Route::get('/blmnikah/{id}/edit', 'BlmnikahController@edit');
    Route::post('/blmnikah/{id}/update', 'BlmnikahController@update');
    Route::get('/blmnikah/{id}/confirm', 'BlmnikahController@confirm');
    Route::get('/blmnikah/{id}/tolak', 'BlmnikahController@tolak');
    Route::get('/blmnikah/{id}/selesai', 'BlmnikahController@selesai');
    Route::get('/blmnikah/{id}/cetakPdf', 'BlmnikahController@cetakPdf');

    //keramaian
    Route::get('/keramaian', 'KeramaianController@index')->name('keramaian');
    Route::get('/keramaian/{id}/detail', 'KeramaianController@detail');
    Route::get('/keramaian/{id}/delete', 'KeramaianController@delete');
    Route::get('/keramaian/{id}/edit', 'KeramaianController@edit');
    Route::post('/keramaian/{id}/update', 'KeramaianController@update');
    Route::get('/keramaian/{id}/confirm', 'KeramaianController@confirm');
    Route::get('/keramaian/{id}/tolak', 'KeramaianController@tolak');
    Route::get('/keramaian/{id}/selesai', 'KeramaianController@selesai');
    Route::get('/keramaian/{id}/cetakPdf', 'KeramaianController@cetakPdf');

});

