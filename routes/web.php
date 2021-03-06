<?php

use Illuminate\Support\Facades\Route;
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

Route::any('', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/doctor', [App\Http\Controllers\DoctorCreationController::class, "index"])->name("doctor");
Route::post('/doctor', [App\Http\Controllers\DoctorCreationController::class, "store"])->name("doctor_post");
Route::get('/chat/{doctor}/{patient}',[App\Http\Controllers\ChatController::class, "index"]);
Route::post('/chat',[App\Http\Controllers\ChatController::class, "create"]);
