<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Publicas
Route::get('/u/{user}', [App\http\Controllers\PostController::class, 'index'])->name('user.posts');

//Privadas

Route::middleware(['auth'])->group(function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/users/view', [App\http\Controllers\UserController::class, 'index']);
    Route::resource('users', App\Http\Controllers\UserController::class)
    ->except(['index']);
    Route::resource('posts', App\Http\Controllers\PostController::class)
    ->except(['index']);

});




