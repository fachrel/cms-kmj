<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/tentang', function () {
    return view('pages.about');
});
Route::get('/tarif', function () {
    return view('pages.pricing');
});
Route::get('/kontak', function () {
    return view('pages.contact');
});

Route::get('/kenapa-harus-kmj', function () {
    return view('pages.why');
});

Route::get('/artikel', function () {
    return view('pages.blog');
});

Route::get('/galeri', function () {
    return view('pages.gallery');
});


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->middleware('auth');

Route::get('/category', [CategoryController::class, 'index'])->middleware('auth');
Route::post('/category', [CategoryController::class, 'store'])->middleware('auth');
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->middleware('auth');

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');
Route::delete('category/{id}', [PostController::class, 'destroy'])->middleware('auth');


