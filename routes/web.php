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
Route::get('/about-us', [App\Http\Controllers\WebController::class, 'aboutUs']);
Route::get('/terms', [App\Http\Controllers\WebController::class, 'terms']);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\WebController::class, 'index']);

Route::get('/teacher/home', [App\Http\Controllers\TeacherController::class, 'index']);
Route::get('/teacher/course/{course}', [App\Http\Controllers\TeacherController::class, 'course'])->name("course_detail");
//Route::get('/teacher/course/{course}&{classroom}', [App\Http\Controllers\TeacherController::class, 'course_classroom'])->name("course&classroom_detail");
Route::get('/teacher/session', [App\Http\Controllers\TeacherController::class, 'session'])->name("session_detail");





