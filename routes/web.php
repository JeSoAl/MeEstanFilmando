<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\FilmUserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

require __DIR__.'/web/admin.php';

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/filmUsers/create', [FilmUserController::class, 'create'])->name('filmUsers.create');
Route::post('/filmUsers/{user}/storeFilters', [FilmUserController::class, 'storeFilters'])->name('filmUsers.storeFilters');
Route::put('/filmUsers/{user}/update', [FilmUserController::class, 'update'])->name('filmUsers.update');
Route::get('/filmUsers/{user}/show', [FilmUserController::class, 'show'])->name('filmUsers.show');
Route::post('/filmUsers/{user}/destroy', [FilmUserController::class, 'destroy'])->name('filmUsers.destroy');
Route::post('/filmUsers/{user}/destroyAll', [FilmUserController::class, 'destroyAll'])->name('filmUsers.destroyAll');
Route::post('/filmUsers/{user}/destroyFilters', [FilmUserController::class, 'destroyFilters'])->name('filmUsers.destroyFilters');

