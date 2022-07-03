<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Controller::class, 'index'] );
//Auth::routes();

Route::get('/auth', [App\Http\Controllers\AuthController::class, 'formAuth'])->name('login');
Route::post('/auth', [App\Http\Controllers\AuthController::class, 'auth'])->name('auth');
Route::get('/register', [App\Http\Controllers\AuthController::class, 'formRegister'])->name('formRegister');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/saveStream', [App\Http\Controllers\Controller::class, 'saveStreamtoApi'])->name('saveStream');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/add', [App\Http\Controllers\Controller::class, 'formAdd'])->name('formAdd');
    Route::post('/addstream', [App\Http\Controllers\Controller::class, 'saveStream'])->name('addstream');
    Route::get('/getstream', [App\Http\Controllers\Controller::class, 'getStream'])->name('getstream');
});