<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/shop', [HomeController::class, 'shop']);
// Route::get('/about', [HomeController::class, 'about']);

// 
Route::get('/', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::post('posts/save', [PostController::class, 'save']);
Route::get('posts/edit/{id}', [PostController::class, 'edit'])
    ->name('posts.edit');
Route::post('posts/update', [PostController::class, 'update']);
Route::get('posts/delete/{id}', [PostController::class, 'delete'] )
    ->name('posts.delete');
