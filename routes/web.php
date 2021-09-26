<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Ajax\ComedianController;
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
Route::post('/posts/good_2', [PostController::class, 'good_2'])
    ->name('posts.good_2');
Route::post('/posts/good_3', [PostController::class, 'good_3'])
    ->name('posts.good_3');
Route::post('/posts/good_4', [PostController::class, 'good_4'])
    ->name('posts.good_4');
Route::post('/posts/good_5', [PostController::class, 'good_5'])
    ->name('posts.good_5');
Route::post('/posts/good_6', [PostController::class, 'good_6'])
    ->name('posts.good_6');
Route::post('/posts/good_7', [PostController::class, 'good_7'])
    ->name('posts.good_7');
Route::post('/posts/good_8', [PostController::class, 'good_8'])
    ->name('posts.good_8');
Route::post('/posts/good_9', [PostController::class, 'good_9'])
    ->name('posts.good_9');
Route::post('/posts/good_10', [PostController::class, 'good_10'])
    ->name('posts.good_10');
Route::post('/posts/good_11', [PostController::class, 'good_11'])
    ->name('posts.good_11');
Route::post('/posts/good_12', [PostController::class, 'good_12'])
    ->name('posts.good_12');
Route::post('/posts/good_13', [PostController::class, 'good_13'])
    ->name('posts.good_13');

Route::post('/posts/csv-imports/csv', [PostController::class, 'store']);

// URL::forceScheme('https');
