<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;

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

Route::get('tugas/tambah', [TugasController::class, 'tambah']);
Route::post('tugas/simpan', [TugasController::class, 'simpan']);
Route::get('tugas/lihat/{tugas}', [TugasController::class, 'lihat']);
