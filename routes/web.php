<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\AlbumController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Photo
Route::get('/photos', [App\Http\Controllers\PhotoController::class, 'index'])->name('photos');
Route::get('/photos/create', [App\Http\Controllers\PhotoController::class, 'create'])->name('photos.create');
Route::post('/photos', [App\Http\Controllers\PhotoController::class, 'store'])->name('photos.store');
Route::get('/photos/edit/{id}', [App\Http\Controllers\PhotoController::class, 'edit'])->name('photos.edit');
route::delete('/photos/{id}', [App\Http\Controllers\PhotoController::class, 'destroy'])->name('photos.destroy');
route::put('/photos/{id}', [App\Http\Controllers\PhotoController::class, 'update'])->name('photos.update');
route::get('/photos/{id}', [App\Http\Controllers\PhotoController::class, 'show'])->name('photos.show');


// Album
Route::get('/albums', [App\Http\Controllers\AlbumController::class, 'index'])->name('albums');
Route::get('/albums/create', [App\Http\Controllers\AlbumController::class, 'create'])->name('albums.create');
Route::post('/albums', [App\Http\Controllers\AlbumController::class, 'store'])->name('albums.store');
Route::get('/albums/edit/{id}', [App\Http\Controllers\AlbumController::class, 'edit'])->name('albums.edit');
route::delete('/albums/{id}', [App\Http\Controllers\AlbumController::class, 'destroy'])->name('albums.destroy');
route::put('/albums/{id}', [App\Http\Controllers\AlbumController::class, 'update'])->name('albums.update');
route::get('/albums/{id}', [App\Http\Controllers\AlbumController::class, 'show'])->name('albums.show');









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
