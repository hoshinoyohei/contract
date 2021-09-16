<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create_1', [PostController::class, 'create_1'])
    ->name('posts.create_1');
Route::post('/posts/add_1', [PostController::class, 'add_1'])
    ->name('posts.add_1');

Route::get('/posts/create_2', [PostController::class, 'create_2'])
    ->name('posts.create_2');
Route::post('/posts/add_2', [PostController::class, 'add_2'])
    ->name('posts.add_2');

Route::post('/posts/sertch', [PostController::class, 'sertch'])
    ->name('posts.sertch');

Route::post('/posts/good_1', [PostController::class, 'good_1'])
    ->name('posts.good_1');
