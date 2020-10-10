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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/pegawai', 'PegawaiController');
    Route::post('/pegawai/import', 'PegawaiController@import')->name('pegawai.import');
    Route::get('/absen', 'AbsensiController@index')->name('absen.index');
    Route::delete('/absen/{id}', 'AbsensiController@destroy')->name('absen.delete');
    Route::get('/cuti', 'CutiController@index')->name('cuti.index');
    Route::delete('/cuti/{id}', 'CutiController@delete')->name('cuti.delete');
    Route::get('/cuti/approve/{id}', 'CutiController@approve')->name('cuti.approve');
    Route::get('/cuti/belum/{id}', 'CutiController@belum')->name('cuti.belum');
    Route::get('/cuti/tolak/{id}', 'CutiController@tolak')->name('cuti.tolak');
    Route::get('/rekap', 'AbsensiController@rekap')->name('absen.rekap');
    Route::get('/darurat', 'DaruratController@index')->name('darurat.index');
    Route::delete('/darurat/{id}', 'DaruratController@destroy')->name('darurat.delete');
    Route::get('/darurat/approve/{id}', 'DaruratController@approve')->name('darurat.approve');
    Route::get('/darurat/belum/{id}', 'DaruratController@belum')->name('darurat.belum');
    Route::get('/darurat/tolak/{id}', 'DaruratController@tolak')->name('darurat.tolak');
    Route::get('/rekap/export', 'AbsensiController@export')->name('rekap.export');
});
