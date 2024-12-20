<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmUserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';

require __DIR__.'/web/admin.php';

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/us', function () {
    return view('us');
})->name('us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{user}/show', [UserController::class, 'show'])->name('users.show');
Route::post('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::post('/films/store', [FilmController::class, 'store'])->name('films.store');
Route::post('/films/{user}/storeFilters', [FilmController::class, 'storeFilters'])->name('films.storeFilters');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{film}/update', [FilmController::class, 'update'])->name('films.update');
Route::get('/films/{quickUser}/show', [FilmController::class, 'show'])->name('films.show');
Route::post('/films/{quickUser}/destroy', [FilmController::class, 'destroy'])->name('films.destroy');

Route::get('/filmUsers/create', [FilmUserController::class, 'create'])->name('filmUsers.create');
Route::post('/filmUsers/{user}/storeFilters', [FilmUserController::class, 'storeFilters'])->name('filmUsers.storeFilters');
Route::put('/filmUsers/{user}/update', [FilmUserController::class, 'update'])->name('filmUsers.update');
Route::get('/filmUsers/{user}/show', [FilmUserController::class, 'show'])->name('filmUsers.show');
Route::post('/filmUsers/{user}/destroy', [FilmUserController::class, 'destroy'])->name('filmUsers.destroy');
Route::post('/filmUsers/{user}/destroyAll', [FilmUserController::class, 'destroyAll'])->name('filmUsers.destroyAll');
Route::post('/filmUsers/{user}/destroyFilters', [FilmUserController::class, 'destroyFilters'])->name('filmUsers.destroyFilters');

Route::get('/comments/{film}/index', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}/update', [CommentController::class, 'update'])->name('comments.update');
Route::get('/comments/{comment}/show', [CommentController::class, 'show'])->name('comments.show');
Route::post('/comments/{comment}/destroy', [CommentController::class, 'destroy'])->name('comments.destroy');

