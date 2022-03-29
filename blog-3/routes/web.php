<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiztroxController;

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

Route::get('/', [BiztroxController::class, 'index'])->name('home');
Route::get('/blog-category', [BiztroxController::class, 'category'])->name('blog-category');
Route::get('/blog-detail', [BiztroxController::class, 'detail'])->name('blog-detail');
Route::get('/blog-contact', [BiztroxController::class, 'contact'])->name('blog-contact');
