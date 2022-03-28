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

Route::get('/', App\Http\Controllers\MainController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/models', [App\Http\Controllers\ModelController::class, 'index'])->name('model');
Route::post('/models/visible', [App\Http\Controllers\ModelController::class, 'visible'])->name('visible');
Route::get('/marks', [App\Http\Controllers\MarkController::class, 'index'])->name('mark');
Route::post('/marks/visible', [App\Http\Controllers\MarkController::class, 'visible'])->name('markVisible');
Route::get('/botusers', [App\Http\Controllers\BotUserController::class, 'index'])->name('botuser');
Route::get('/cars/{car}', [App\Http\Controllers\CarController::class, 'index'])->name('car');
