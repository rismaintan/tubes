<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PelaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenemuanController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('pengaduan', [PengaduanController::class, 'pengaduan'])->name('pengaduan');
Route::get('preregister', [UserController::class, 'preregister'])->name('preregister');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::get('prelogin', [UserController::class, 'prelogin'])->name('prelogin');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('preprofile', [UserController::class, 'preprofile'])->name('preprofile');
Route::post('profile', [UserController::class, 'profile'])->name('profile');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::resource('pengaduan', PengaduanController::class);
Route::resource('penemuan', PenemuanController::class);
