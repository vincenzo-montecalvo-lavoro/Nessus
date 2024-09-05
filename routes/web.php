<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();

    $token = csrf_token();

    // ...
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/create', [UserController::class, 'get'])->name('users_get');
Route::post('/users/create', [UserController::class, 'post'])->name('users_post');

Route::get('/users/login', [LoginController::class, 'get'])->name('login_get');
Route::post('/users/login', [LoginController::class, 'post'])->name('login_post');

Route::get('/albums/create', [AlbumController::class, 'get'])->name('albums_get')->middleware('auth');
Route::post('/albums/create', [AlbumController::class, 'post'])->name('albums_post')->middleware('auth');

Route::get('/search', [SearchController::class, 'get'])->name('search_get')->middleware('auth');
Route::post('/search', [SearchController::class, 'post'])->name('search_post')->middleware('auth');