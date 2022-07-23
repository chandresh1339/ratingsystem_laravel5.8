<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::get('/post-create',[ProductController::class, 'create'])->name('post.create');
Route::post('/post-store',[ProductController::class, 'store'])->name('post.store');
Route::get('/post-list',[ProductController::class, 'list'])->name('post.list');
Route::get('/post-view/{id}',[ProductController::class, 'view'])->name('post.view');
 
#Manage Review
Route::post('/review-store',[ProductController::class, 'reviewstore'])->name('review.store');
