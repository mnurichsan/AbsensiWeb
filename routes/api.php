<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/login', 'API\PegawaiControllerApi@login');
Route::get('/kehadiran', 'API\PegawaiControllerApi@readKehadiran');
Route::post('/absen', 'API\AbsensiControllerApi@store');
Route::get('/atasan', 'API\PegawaiControllerApi@atasan');
Route::post('/cuti', 'API\CutiControllerApi@store');
Route::post('/darurat', 'API\DaruratControllerApi@store');
Route::post('/pulang', 'API\AbsensiControllerApi@pulang');
Route::post('/istrahat', 'API\AbsensiControllerApi@istrahat');
Route::get('/data/{nip}', 'API\DataControllerApi@dataAccount');
Route::get('/data/cuti/{nip}', 'API\DataControllerApi@accountCuti');
Route::get('/data/darurat/{nip}', 'API\DataControllerApi@accountDarurat');
Route::get('/data/report/{nip}/{bulan}', 'API\DataControllerAPI@dataReport');
