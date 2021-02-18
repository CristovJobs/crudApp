<?php

use App\Http\Controllers\PostController;
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
    return view("dashboard.home.index");
});


Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/add', [PostController::class, "create"]);
Route::post('/posts/add', [PostController::class, "store"]);
Route::get('/posts/edit/{id}', [PostController::class, "edit"]);
Route::put('/posts/edit/{id}', [PostController::class, "update"]);
Route::post('/posts/info/{id}', [PostController::class, "store"]);
Route::post('/posts/delete/{id}', [PostController::class, "store"]);
