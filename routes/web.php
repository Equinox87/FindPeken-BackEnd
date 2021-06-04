<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});
Route::get('logout', [UserController::class, 'logout']);

Auth::routes();
Route::get('home', [HomeController::class, 'index'])->name('home');

// data pasar
Route::get('pasar', [PasarController::class, 'pasar'])->name('pasar');
Route::post('pasar', [PasarController::class, 'addpasar'])->name('addpasar');
Route::post('pasar/edit/{id}', [PasarController::class, 'edit'])->name('editpasar');
Route::get('pasar/edit/{id}', [PasarController::class, 'edit'])->name('editpasar');
Route::post('pasar/edit/{id}', [PasarController::class, 'update'])->name('updatepasar');
Route::get('pasar/hapus/{id}', [PasarController::class, 'delete'])->name('deletepasar');

// data user
Route::get('user', [UserController::class, 'user']);
Route::post('user', [UserController::class, 'adduser']);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::post('user/edit/{id}', [UserController::class, 'update']);
Route::get('user/hapus/{id}', [UserController::class, 'delete']);
