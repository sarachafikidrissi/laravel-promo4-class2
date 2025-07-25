<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TodoController;
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


//* Candidats

Route::get('/candidat', [CandidatController::class, 'index'])->name('candidat.index');
Route::get('/candidat/list', [CandidatController::class, 'candidatList'])->name('');
Route::post('/candidat/store', [CandidatController::class, 'store'])->name('candidat.store');



//*Products

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::delete('/product/destory/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');  



//* Todo

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::delete('/todo/destroy/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::put('/todo/update/{todo}', [TodoController::class, 'update'])->name('todo.update');


//* Email

Route::get('/email/create', [MailController::class, 'create'])->name('mail.create');
Route::get('/email', [MailController::class, 'index'])->name('mail.index');
Route::post('/email/store', [MailController::class, 'store'])->name('mail.store');
Route::delete('/email/destroy/{mail}', [MailController::class, 'destroy'])->name('mail.destroy');

Route::put('/email/update/{mail}', [MailController::class, 'update'])->name('mail.update');


//^ email filter

Route::post('/email/filter', [MailController::class, 'filterEmail'])->name('mail.filter');

//* gallery

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::delete('/gallery/destroy/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
Route::put('/gallery/update/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
