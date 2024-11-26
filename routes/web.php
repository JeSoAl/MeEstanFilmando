<?php

use App\Http\Controllers\Admin\UserController;
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

Route::get('/admin/users', [UserController::class, 'index'])->name('users.index');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/admin/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/admin/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::get('/admin/users/{user}/show', [UserController::class, 'show'])->name('users.show');
Route::post('/admin/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

