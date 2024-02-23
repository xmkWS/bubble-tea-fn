<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


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

Route::controller(IndexController::class)->group(function () {
    Route::get('/', 'index')->name('index.index');
    Route::get('/catalog', 'catalog')->name('index.catalog');
    Route::get('/admin', 'admin')->name('index.admin');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'registerPage')->name('auth.registerPage');
    Route::get('/login', 'loginPage')->name('auth.loginPage');
    Route::post('/login', 'login')->name('auth.login');
    Route::post('/register', 'register')->name('auth.register');
    Route::post('/logout', 'logout')->name('auth.logout');
});
