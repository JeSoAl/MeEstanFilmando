<?php

use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ActorController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\AvatarController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\SuscriptionController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\DirectorController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('admin.users.update');
Route::get('/users/{user}/show', [UserController::class, 'show'])->name('admin.users.show');
Route::post('/users/{user}/destroy', [UserController::class, 'destroy'])->name('admin.users.destroy');

Route::get('/films', [FilmController::class, 'index'])->name('admin.films.index');
Route::get('/films/create', [FilmController::class, 'create'])->name('admin.films.create');
Route::post('/films/store', [FilmController::class, 'store'])->name('admin.films.store');
Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('admin.films.edit');
Route::put('/films/{film}/update', [FilmController::class, 'update'])->name('admin.films.update');
Route::get('/films/{film}/show', [FilmController::class, 'show'])->name('admin.films.show');
Route::post('/films/{film}/destroy', [FilmController::class, 'destroy'])->name('admin.films.destroy');

Route::get('/directors', [DirectorController::class, 'index'])->name('admin.directors.index');
Route::get('/directors/create', [DirectorController::class, 'create'])->name('admin.directors.create');
Route::post('/directors/store', [DirectorController::class, 'store'])->name('admin.directors.store');
Route::get('/directors/{director}/edit', [DirectorController::class, 'edit'])->name('admin.directors.edit');
Route::put('/directors/{director}/update', [DirectorController::class, 'update'])->name('admin.directors.update');
Route::get('/directors/{director}/show', [DirectorController::class, 'show'])->name('admin.directors.show');
Route::post('/directors/{director}/destroy', [DirectorController::class, 'destroy'])->name('admin.directors.destroy');

Route::get('/actors', [ActorController::class, 'index'])->name('admin.actors.index');
Route::get('/actors/create', [ActorController::class, 'create'])->name('admin.actors.create');
Route::post('/actors/store', [ActorController::class, 'store'])->name('admin.actors.store');
Route::get('/actors/{actor}/edit', [ActorController::class, 'edit'])->name('admin.actors.edit');
Route::put('/actors/{actor}/update', [ActorController::class, 'update'])->name('admin.actors.update');
Route::get('/actors/{actor}/show', [ActorController::class, 'show'])->name('admin.actors.show');
Route::post('/actors/{actor}/destroy', [ActorController::class, 'destroy'])->name('admin.actors.destroy');

Route::get('/genres', [GenreController::class, 'index'])->name('admin.genres.index');
Route::get('/genres/create', [GenreController::class, 'create'])->name('admin.genres.create');
Route::post('/genres/store', [GenreController::class, 'store'])->name('admin.genres.store');
Route::get('/genres/{genre}/edit', [GenreController::class, 'edit'])->name('admin.genres.edit');
Route::put('/genres/{genre}/update', [GenreController::class, 'update'])->name('admin.genres.update');
Route::get('/genres/{genre}/show', [GenreController::class, 'show'])->name('admin.genres.show');
Route::post('/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('admin.genres.destroy');

Route::get('/platforms', [PlatformController::class, 'index'])->name('admin.platforms.index');
Route::get('/platforms/create', [PlatformController::class, 'create'])->name('admin.platforms.create');
Route::post('/platforms/store', [PlatformController::class, 'store'])->name('admin.platforms.store');
Route::get('/platforms/{platform}/edit', [PlatformController::class, 'edit'])->name('admin.platforms.edit');
Route::put('/platforms/{platform}/update', [PlatformController::class, 'update'])->name('admin.platforms.update');
Route::get('/platforms/{platform}/show', [PlatformController::class, 'show'])->name('admin.platforms.show');
Route::post('/platforms/{platform}/destroy', [PlatformController::class, 'destroy'])->name('vplatforms.destroy');

Route::get('/awards', [AwardController::class, 'index'])->name('admin.awards.index');
Route::get('/awards/create', [AwardController::class, 'create'])->name('admin.awards.create');
Route::post('/awards/store', [AwardController::class, 'store'])->name('admin.awards.store');
Route::get('/awards/{award}/edit', [AwardController::class, 'edit'])->name('admin.awards.edit');
Route::put('/awards/{award}/update', [AwardController::class, 'update'])->name('admin.awards.update');
Route::get('/awards/{award}/show', [AwardController::class, 'show'])->name('admin.awards.show');
Route::post('/awards/{award}/destroy', [AwardController::class, 'destroy'])->name('admin.awards.destroy');

Route::get('/avatars', [AvatarController::class, 'index'])->name('admin.avatars.index');
Route::get('/avatars/create', [AvatarController::class, 'create'])->name('admin.avatars.create');
Route::post('/avatars/store', [AvatarController::class, 'store'])->name('admin.avatars.store');
Route::get('/avatars/{avatar}/edit', [AvatarController::class, 'edit'])->name('admin.avatars.edit');
Route::put('/avatars/{avatar}/update', [AvatarController::class, 'update'])->name('admin.avatars.update');
Route::get('/avatars/{avatar}/show', [AvatarController::class, 'show'])->name('admin.avatars.show');
Route::post('/avatars/{avatar}/destroy', [AvatarController::class, 'destroy'])->name('admin.avatars.destroy');

Route::get('/suscriptions', [SuscriptionController::class, 'index'])->name('admin.suscriptions.index');
Route::get('/suscriptions/create', [SuscriptionController::class, 'create'])->name('admin.suscriptions.create');
Route::post('/suscriptions/store', [SuscriptionController::class, 'store'])->name('admin.suscriptions.store');
Route::get('/suscriptions/{suscription}/edit', [SuscriptionController::class, 'edit'])->name('admin.suscriptions.edit');
Route::put('/suscriptions/{suscription}/update', [SuscriptionController::class, 'update'])->name('admin.suscriptions.update');
Route::get('/suscriptions/{suscription}/show', [SuscriptionController::class, 'show'])->name('admin.suscriptions.show');
Route::post('/suscriptions/{suscription}/destroy', [SuscriptionController::class, 'destroy'])->name('admin.suscriptions.destroy');

Route::get('/comments', [CommentController::class, 'index'])->name('admin.comments.index');
Route::get('/comments/create', [CommentController::class, 'create'])->name('admin.comments.create');
Route::post('/comments/store', [CommentController::class, 'store'])->name('admin.comments.store');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('admin.comments.edit');
Route::put('/comments/{comment}/update', [CommentController::class, 'update'])->name('admin.comments.update');
Route::get('/comments/{comment}/show', [CommentController::class, 'show'])->name('admin.comments.show');
Route::post('/comments/{comment}/destroy', [CommentController::class, 'destroy'])->name('admin.comments.destroy');
