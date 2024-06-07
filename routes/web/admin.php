<?php

use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ActorController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\AvatarController;
use App\Http\Controllers\Admin\SuscriptionController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\DirectorController;
use Illuminate\Support\Facades\Route;

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
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
Route::put('/films/{film}/update', [FilmController::class, 'update'])->name('films.update');
Route::get('/films/{film}/show', [FilmController::class, 'show'])->name('films.show');
Route::post('/films/{film}/destroy', [FilmController::class, 'destroy'])->name('films.destroy');

Route::get('/directors', [DirectorController::class, 'index'])->name('directors.index');
Route::get('/directors/create', [DirectorController::class, 'create'])->name('directors.create');
Route::post('/directors/store', [DirectorController::class, 'store'])->name('directors.store');
Route::get('/directors/{director}/edit', [DirectorController::class, 'edit'])->name('directors.edit');
Route::put('/directors/{director}/update', [DirectorController::class, 'update'])->name('directors.update');
Route::get('/directors/{director}/show', [DirectorController::class, 'show'])->name('directors.show');
Route::post('/directors/{director}/destroy', [DirectorController::class, 'destroy'])->name('directors.destroy');

Route::get('/actors', [ActorController::class, 'index'])->name('actors.index');
Route::get('/actors/create', [ActorController::class, 'create'])->name('actors.create');
Route::post('/actors/store', [ActorController::class, 'store'])->name('actors.store');
Route::get('/actors/{actor}/edit', [ActorController::class, 'edit'])->name('actors.edit');
Route::put('/actors/{actor}/update', [ActorController::class, 'update'])->name('actors.update');
Route::get('/actors/{actor}/show', [ActorController::class, 'show'])->name('actors.show');
Route::post('/actors/{actor}/destroy', [ActorController::class, 'destroy'])->name('actors.destroy');

Route::get('/genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('/genres/create', [GenreController::class, 'create'])->name('genres.create');
Route::post('/genres/store', [GenreController::class, 'store'])->name('genres.store');
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('genres.edit');
Route::put('/genres/{genre}/update', [GenreController::class, 'update'])->name('genres.update');
Route::get('/genres/{genre}/show', [GenreController::class, 'show'])->name('genres.show');
Route::post('/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('genres.destroy');

Route::get('/platforms', [PlatformController::class, 'index'])->name('platforms.index');
Route::get('/platforms/create', [PlatformController::class, 'create'])->name('platforms.create');
Route::post('/platforms/store', [PlatformController::class, 'store'])->name('platforms.store');
Route::get('/platforms/{platform}/edit', [PlatformController::class, 'edit'])->name('platforms.edit');
Route::put('/platforms/{platform}/update', [PlatformController::class, 'update'])->name('platforms.update');
Route::get('/platforms/{platform}/show', [PlatformController::class, 'show'])->name('platforms.show');
Route::post('/platforms/{platform}/destroy', [PlatformController::class, 'destroy'])->name('platforms.destroy');

Route::get('/awards', [AwardController::class, 'index'])->name('awards.index');
Route::get('/awards/create', [AwardController::class, 'create'])->name('awards.create');
Route::post('/awards/store', [AwardController::class, 'store'])->name('awards.store');
Route::get('/awards/{award}/edit', [AwardController::class, 'edit'])->name('awards.edit');
Route::put('/awards/{award}/update', [AwardController::class, 'update'])->name('awards.update');
Route::get('/awards/{award}/show', [AwardController::class, 'show'])->name('awards.show');
Route::post('/awards/{award}/destroy', [AwardController::class, 'destroy'])->name('awards.destroy');

Route::get('/avatars', [AvatarController::class, 'index'])->name('avatars.index');
Route::get('/avatars/create', [AvatarController::class, 'create'])->name('avatars.create');
Route::post('/avatars/store', [AvatarController::class, 'store'])->name('avatars.store');
Route::get('/avatars/{avatar}/edit', [AvatarController::class, 'edit'])->name('avatars.edit');
Route::put('/avatars/{avatar}/update', [AvatarController::class, 'update'])->name('avatars.update');
Route::get('/avatars/{avatar}/show', [AvatarController::class, 'show'])->name('avatars.show');
Route::post('/avatars/{avatar}/destroy', [AvatarController::class, 'destroy'])->name('avatars.destroy');

Route::get('/suscriptions', [SuscriptionController::class, 'index'])->name('suscriptions.index');
Route::get('/suscriptions/create', [SuscriptionController::class, 'create'])->name('suscriptions.create');
Route::post('/suscriptions/store', [SuscriptionController::class, 'store'])->name('suscriptions.store');
Route::get('/suscriptions/{suscription}/edit', [SuscriptionController::class, 'edit'])->name('suscriptions.edit');
Route::put('/suscriptions/{suscription}/update', [SuscriptionController::class, 'update'])->name('suscriptions.update');
Route::get('/suscriptions/{suscription}/show', [SuscriptionController::class, 'show'])->name('suscriptions.show');
Route::post('/suscriptions/{suscription}/destroy', [SuscriptionController::class, 'destroy'])->name('suscriptions.destroy');
