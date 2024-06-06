<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmUserController;
use App\Http\Controllers\Admin\FilmController as AdminFilmController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ActorController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\AvatarController;
use App\Http\Controllers\Admin\SuscriptionController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\DirectorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [AdminUserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}/update', [AdminUserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/{user}/show', [AdminUserController::class, 'show'])->name('admin.users.show');
Route::post('/admin/users/{user}/destroy', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

Route::get('/admin/films', [AdminFilmController::class, 'index'])->name('admin.films.index');
Route::get('/admin/films/create', [AdminFilmController::class, 'create'])->name('admin.films.create');
Route::post('/admin/films/store', [AdminFilmController::class, 'store'])->name('admin.films.store');
Route::get('/admin/films/{film}/edit', [AdminFilmController::class, 'edit'])->name('admin.films.edit');
Route::put('/admin/films/{film}/update', [AdminFilmController::class, 'update'])->name('admin.films.update');
Route::get('/admin/films/{film}/show', [AdminFilmController::class, 'show'])->name('admin.films.show');
Route::post('/admin/films/{film}/destroy', [AdminFilmController::class, 'destroy'])->name('admin.films.destroy');

Route::get('/admin/directors', [DirectorController::class, 'index'])->name('admin.directors.index');
Route::get('/admin/directors/create', [DirectorController::class, 'create'])->name('admin.directors.create');
Route::post('/admin/directors/store', [DirectorController::class, 'store'])->name('admin.directors.store');
Route::get('/admin/directors/{director}/edit', [DirectorController::class, 'edit'])->name('admin.directors.edit');
Route::put('/admin/directors/{director}/update', [DirectorController::class, 'update'])->name('admin.directors.update');
Route::get('/admin/directors/{director}/show', [DirectorController::class, 'show'])->name('admin.directors.show');
Route::post('/admin/directors/{director}/destroy', [DirectorController::class, 'destroy'])->name('admin.directors.destroy');

Route::get('/admin/actors', [ActorController::class, 'index'])->name('admin.actors.index');
Route::get('/admin/actors/create', [ActorController::class, 'create'])->name('admin.actors.create');
Route::post('/admin/actors/store', [ActorController::class, 'store'])->name('admin.actors.store');
Route::get('/admin/actors/{actor}/edit', [ActorController::class, 'edit'])->name('admin.actors.edit');
Route::put('/admin/actors/{actor}/update', [ActorController::class, 'update'])->name('admin.actors.update');
Route::get('/admin/actors/{actor}/show', [ActorController::class, 'show'])->name('admin.actors.show');
Route::post('/admin/actors/{actor}/destroy', [ActorController::class, 'destroy'])->name('admin.actors.destroy');

Route::get('/admin/genres', [GenreController::class, 'index'])->name('admin.genres.index');
Route::get('/admin/genres/create', [GenreController::class, 'create'])->name('admin.genres.create');
Route::post('/admin/genres/store', [GenreController::class, 'store'])->name('admin.genres.store');
Route::get('/admin/genres/{genre}/edit', [GenreController::class, 'edit'])->name('admin.genres.edit');
Route::put('/admin/genres/{genre}/update', [GenreController::class, 'update'])->name('admin.genres.update');
Route::get('/admin/genres/{genre}/show', [GenreController::class, 'show'])->name('admin.genres.show');
Route::post('/admin/genres/{genre}/destroy', [GenreController::class, 'destroy'])->name('admin.genres.destroy');

Route::get('/admin/platforms', [PlatformController::class, 'index'])->name('admin.platforms.index');
Route::get('/admin/platforms/create', [PlatformController::class, 'create'])->name('admin.platforms.create');
Route::post('/admin/platforms/store', [PlatformController::class, 'store'])->name('admin.platforms.store');
Route::get('/admin/platforms/{platform}/edit', [PlatformController::class, 'edit'])->name('admin.platforms.edit');
Route::put('/admin/platforms/{platform}/update', [PlatformController::class, 'update'])->name('admin.platforms.update');
Route::get('/admin/platforms/{platform}/show', [PlatformController::class, 'show'])->name('admin.platforms.show');
Route::post('/admin/platforms/{platform}/destroy', [PlatformController::class, 'destroy'])->name('admin.platforms.destroy');

Route::get('/admin/awards', [AwardController::class, 'index'])->name('admin.awards.index');
Route::get('/admin/awards/create', [AwardController::class, 'create'])->name('admin.awards.create');
Route::post('/admin/awards/store', [AwardController::class, 'store'])->name('admin.awards.store');
Route::get('/admin/awards/{award}/edit', [AwardController::class, 'edit'])->name('admin.awards.edit');
Route::put('/admin/awards/{award}/update', [AwardController::class, 'update'])->name('admin.awards.update');
Route::get('/admin/awards/{award}/show', [AwardController::class, 'show'])->name('admin.awards.show');
Route::post('/admin/awards/{award}/destroy', [AwardController::class, 'destroy'])->name('admin.awards.destroy');

Route::get('/admin/avatars', [AvatarController::class, 'index'])->name('admin.avatars.index');
Route::get('/admin/avatars/create', [AvatarController::class, 'create'])->name('admin.avatars.create');
Route::post('/admin/avatars/store', [AvatarController::class, 'store'])->name('admin.avatars.store');
Route::get('/admin/avatars/{avatar}/edit', [AvatarController::class, 'edit'])->name('admin.avatars.edit');
Route::put('/admin/avatars/{avatar}/update', [AvatarController::class, 'update'])->name('admin.avatars.update');
Route::get('/admin/avatars/{avatar}/show', [AvatarController::class, 'show'])->name('admin.avatars.show');
Route::post('/admin/avatars/{avatar}/destroy', [AvatarController::class, 'destroy'])->name('admin.avatars.destroy');

Route::get('/admin/suscriptions', [SuscriptionController::class, 'index'])->name('admin.suscriptions.index');
Route::get('/admin/suscriptions/create', [SuscriptionController::class, 'create'])->name('admin.suscriptions.create');
Route::post('/admin/suscriptions/store', [SuscriptionController::class, 'store'])->name('admin.suscriptions.store');
Route::get('/admin/suscriptions/{suscription}/edit', [SuscriptionController::class, 'edit'])->name('admin.suscriptions.edit');
Route::put('/admin/suscriptions/{suscription}/update', [SuscriptionController::class, 'update'])->name('admin.suscriptions.update');
Route::get('/admin/suscriptions/{suscription}/show', [SuscriptionController::class, 'show'])->name('admin.suscriptions.show');
Route::post('/admin/suscriptions/{suscription}/destroy', [SuscriptionController::class, 'destroy'])->name('admin.suscriptions.destroy');