<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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


//agrupando routa no midllewere alfa

Route::middleware(['auth'])->group(function () {

    Route::get('posts/account', [PostController::class, 'account'])->name('posts.account');

    Route::get('/', function () {return view("dashboard.home.index");});

    Route::get('/posts', [PostController::class, "index"]);
    //Route::get('/posts/add', [PostController::class, "create"]);
   // Route::post('/posts/add', [PostController::class, "store"]);


    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

    Route::get('/posts/edit/{id}', [PostController::class, "edit"]);
    Route::get('/posts/add', [PostController::class, 'create'])->name('posts.create');
    Route::put('/posts/edit/{id}', [PostController::class, "update"]);
    Route::post('/posts/info/{id}', [PostController::class, "store"]);

    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::delete('/posts/{id}', [PostController::class, 'deleted'])->name('posts.deleted');

    //profile




});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
