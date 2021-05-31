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
Route::get('pasar', [PasarController::class, 'pasar'])->name('pasar');
Route::post('pasar', [PasarController::class, 'addpasar'])->name('pasar');

Route::get('user', [UserController::class, 'user']);
