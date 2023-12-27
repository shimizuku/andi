<?php

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

Route::get('/', function () {
    return view('index');
})->name('top');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/access', [App\Http\Controllers\AccessController::class, 'index'])->name('access');
Route::get('/stylist', [App\Http\Controllers\StylistController::class, 'index'])->name('stylist');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/opinion/input', [App\Http\Controllers\OpinionController::class, 'input'])->name('opinionInput');
Route::post('/opinion/input', [App\Http\Controllers\OpinionController::class, 'postInput'])->name('opinionPostInput');
Route::post('/opinion/confirm', [App\Http\Controllers\OpinionController::class, 'confirm'])->name('opinionConfirm');
Route::post('/opinion/result', [App\Http\Controllers\OpinionController::class, 'result'])->name('opinionResult');
