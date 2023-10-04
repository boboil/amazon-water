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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('sustainability', [App\Http\Controllers\IndexController::class, 'sustainability'])->name('sustainability');
Route::get('spiring', [App\Http\Controllers\IndexController::class, 'spiring'])->name('spiring');
Route::get('ambassador', [App\Http\Controllers\IndexController::class, 'ambassador'])->name('ambassador');
Route::get('coming-soon', [App\Http\Controllers\IndexController::class, 'comingSoon'])->name('comingSoon');
Route::get('about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('support', [App\Http\Controllers\IndexController::class, 'support'])->name('support');
Route::post('create-feedback', [App\Http\Controllers\IndexController::class, 'createFeedback'])->name('createFeedback');
Route::post('subscribe', [App\Http\Controllers\IndexController::class, 'subscribe'])->name('subscribe');
Route::get('page/{slug}', [App\Http\Controllers\IndexController::class, 'terms'])->name('terms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
