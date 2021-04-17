<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeluargaController;
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
    return view('index2');
});

//Route::get('/pasien_terdaftar', function () {
    //return view('pasien_terdaftar');
//});

Route::get('/keluarga_terdaftar', [KeluargaController::class, 'index']);
//Route::post('/pasien/create', [PasienController::class, 'create']);
Route::get('/keluarga_terdaftar/create', [KeluargaController::class, 'create']);
Route::get('/home', [KeluargaController::class, 'home']);
Route::post('/keluarga_terdaftar', [KeluargaController::class, 'store']);
Route::delete('/keluarga_terdaftar/{keluarga}', [KeluargaController::class, 'destroy']);
Route::delete('/keluarga_terdaftar/{keluarga}/edit', [KeluargaController::class, 'edit']);