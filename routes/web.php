<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');

Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');

Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');

Route::get('/mahasiswas/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');

Route::get('mahasiswas/{id}/update', [MahasiswaController::class, 'update'])->name('mahasiswas.update');

Route::post('mahasiswas/{id}/update', [MahasiswaController::class, 'saveUpdate'])->name('mahasiswas.saveUpdate');

Route::post('mahasiswas/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswas.delete');