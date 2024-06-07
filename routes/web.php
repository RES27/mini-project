<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProfilController;

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

// Route::get('/', function () {
//     return view('layout.index');
// });
Route::get('/',[App\Http\Controllers\berandaController::class, 'show'])->name('home');

// Auth
Route::get('/register',[App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register',[App\Http\Controllers\AuthController::class, 'onregis'])->name('onregis');
Route::get('/login',[App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login',[App\Http\Controllers\AuthController::class, 'onlogin'])->name('onlogin');
Route::get('/logout',[App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

//user
Route::get('/beranda',[App\Http\Controllers\AuthController::class, 'dashboard'])->name('beranda');
Route::get('/explore', [App\Http\Controllers\ExploreController::class, 'index'])->name('explore');
Route::get('/posting', [App\Http\Controllers\PostingController::class, 'show'])->name('posting');
Route::post('/posting', [App\Http\Controllers\PostingController::class, 'store'])->name('posting.store');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'show'])->name('profil');
