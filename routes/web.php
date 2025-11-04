<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\CalculatorController;
use Brick\Math\Internal\Calculator;

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
    // Route::get('user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    // Route::get('user/create', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    // Route::post('user/store', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    // Route::get('user/edit/{id}', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    // Route::put('user/update/{id}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    // Route::delete('user/destroy/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    Route::resource('user', \App\Http\Controllers\UserController::class);
});


Route::get('belajar', [\App\Http\Controllers\BelajarController::class, 'index'])->name('belajar.index');
Route::get('belajar/tambah', [\App\Http\Controllers\BelajarController::class, 'tambah'])
    ->name('belajar.tambah');
Route::post('storeTambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])
    ->name('storeTambah');

Route::get('calculator', [CalculatorController::class, 'create']);
Route::post('calculator/store', [CalculatorController::class, 'store'])->name('calculator.store');





// get: preview / menampilkan
// post: mengirim sebuah data melalui form
// put: mengirim sebuah data melalui form tapi update
// delete: mengirim sebuah data melalui form tapi hapus
