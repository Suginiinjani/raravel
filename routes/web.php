<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\BentukController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\HargaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//jenis route
Route::get('/jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::post('/jenis', [JenisController::class, 'store'])->name('jenis.store');
Route::get('/jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::put('/jenis/{jenis}', [JenisController::class, 'update'])->name('jenis.update');
Route::get('/jenis/{jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::delete('/jenis/{jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('/jenis/{jenis}', [JenisController::class, 'show'])->name('jenis.show');

//bentuk route
// Route::get('/bentuk', [BentukController::class, 'index'])->name('bentuk.index');
// Route::post('/bentuk', [BentukController::class, 'store'])->name('bentuk.store');
// Route::get('/bentuk/create', [BentukController::class, 'create'])->name('bentuk.create');
// Route::put('/bentuk/{bentuk}', [BentukController::class, 'update'])->name('bentuk.update');
// Route::get('/bentuk/{bentuk}/edit', [BentukController::class, 'edit'])->name('bentuk.edit');
// Route::delete('/bentuk/{bentuk}', [BentukController::class, 'destroy'])->name('bentuk.destroy');
// Route::get('/bentuk/{bentuk}', [BentukController::class, 'show'])->name('bentuk.show');

Route::resource('/bentuks', BentukController::class);
Route::resource('/obats', ObatController::class);
Route::resource('/hargas', HargaController::class);