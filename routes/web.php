<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmUserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->name('admin.')->prefix('/admin')->group(__DIR__ . '/web/admin.php');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/films', [FilmController::class, 'index'])->name('films.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
Route::post('/films/store', [FilmController::class, 'store'])->name('films.store');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{film}/update', [FilmController::class, 'update'])->name('films.update');
Route::get('/films/{film}/show', [FilmController::class, 'show'])->name('films.show');
Route::post('/films/{film}/destroy', [FilmController::class, 'destroy'])->name('films.destroy');

Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments/store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{comment}/update', [CommentController::class, 'update'])->name('comments.update');
Route::get('/comments/{comment}/show', [CommentController::class, 'show'])->name('comments.show');
Route::post('/comments/{comment}/destroy', [CommentController::class, 'destroy'])->name('comments.destroy');

Route::get('/filmsUsers', [FilmUserController::class, 'index'])->name('filmsUsers.index');
Route::get('/filmsUsers/create', [FilmUserController::class, 'create'])->name('filmsUsers.create');
Route::post('/filmsUsers/store', [FilmUserController::class, 'store'])->name('filmsUsers.store');
Route::get('/filmsUsers/{filmsUser}/edit', [FilmUserController::class, 'edit'])->name('filmsUsers.edit');
Route::put('/filmsUsers/{filmsUser}/update', [FilmUserController::class, 'update'])->name('filmsUsers.update');
Route::get('/filmsUsers/{filmsUser}/show', [FilmUserController::class, 'show'])->name('filmsUsers.show');
Route::post('/filmsUsers/{filmsUser}/destroy', [FilmUserController::class, 'destroy'])->name('filmsUsers.destroy');
