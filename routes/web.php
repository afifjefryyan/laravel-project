<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\MengajarController;
use App\Http\Controllers\NilaiController;
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

Route::get('/', [IndexController::class, 'index']);
Route::post('/login_admin', [IndexController::class, 'loginAdmin']);
Route::post('/login_guru', [IndexController::class, 'loginGuru']);
Route::post('/login_siswa', [IndexController::class, 'loginSiswa']);
Route::get('/logout', [IndexController::class, 'logout']);
Route::get('/main', [IndexController::class, 'main']);


Route::middleware(['role:admin'])->group(function () {

  Route::prefix('guru')->group(function () {
    Route::get('/index', [GuruController::class, 'index']);
    Route::get('/create', [GuruController::class, 'create']);
    Route::post('/store', [GuruController::class, 'store']);
    Route::get('/edit/{nip}', [GuruController::class, 'edit']);
    Route::post('/update/{nip}', [GuruController::class, 'update']);
    Route::get('/destroy/{nip}', [GuruController::class, 'destroy']);
  });
  
  Route::prefix('jurusan')->group(function() {
    Route::get('/index', [JurusanController::class, 'index']);
    Route::get('/create', [JurusanController::class, 'create']);
    Route::post('/store', [JurusanController::class, 'store']);
    Route::get('/edit/{id}', [JurusanController::class, 'edit']);
    Route::post('/update/{id}', [JurusanController::class, 'update']);
    Route::get('/destroy/{id}', [JurusanController::class, 'destroy']);
  });
  
  Route::prefix('kelas')->group(function() {
    Route::get('/index', [KelasController::class, 'index']);
    Route::get('/create', [KelasController::class, 'create']);
    Route::post('/store', [KelasController::class, 'store']);
    Route::get('/edit/{id}', [KelasController::class, 'edit']);
    Route::post('/update/{id}', [KelasController::class, 'update']);
    Route::get('/destroy/{id}', [KelasController::class, 'destroy']);
  });
  
  Route::prefix('siswa')->group(function() {
    Route::get('/index', [SiswaController::class, 'index']);
    Route::get('/create', [SiswaController::class, 'create']);
    Route::post('/store', [SiswaController::class, 'store']);
    Route::get('/edit/{id}', [SiswaController::class, 'edit']);
    Route::post('/update/{id}', [SiswaController::class, 'update']);
    Route::get('/destroy/{id}', [SiswaController::class, 'destroy']);
  });
  
  Route::prefix('mapel')->group(function() {
    Route::get('/index', [MapelController::class, 'index']);
    Route::get('/create', [MapelController::class, 'create']);
    Route::post('/store', [MapelController::class, 'store']);
    Route::get('/edit/{id}', [MapelController::class, 'edit']);
    Route::post('/update/{id}', [MapelController::class, 'update']);
    Route::get('/destroy/{id}', [MapelController::class, 'destroy']);
  });
  
  Route::prefix('mengajar')->group(function() {
    Route::get('/index', [MengajarController::class, 'index']);
    Route::get('/create', [MengajarController::class, 'create']);
    Route::post('/store', [MengajarController::class, 'store']);
    Route::get('/edit/{id}', [MengajarController::class, 'edit']);
    Route::post('/update/{id}', [MengajarController::class, 'update']);
    Route::get('/destroy/{id}', [MengajarController::class, 'destroy']);
  });
    
});

Route::prefix()->group(function() {
  Route::get('/index', [NilaiController::class, 'index'])->middleware('role:guru, siswa');
  Route::middleware(['role:guru'])->group(function () {
    Route::get('/create', [NilaiController::class, 'create']);
    Route::post('/store', [NilaiController::class, 'store']);
    Route::get('/edit/{id}', [NilaiController::class, 'edit']);
    Route::post('/update/{id}', [NilaiController::class, 'update']);
    Route::get('/destroy/{id}', [NilaiController::class, 'destroy']);
      
  });

});
