<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home.index');

//* Route of post view

Route::get('/post', [PostController::class, 'index'])->name('post.index');

//* to post data 
Route::post('/post/store', [PostController::class, 'store'])->name('post.store');


//* to show details of a specific element

Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');