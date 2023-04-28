<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;


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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/mypage', [App\Http\Controllers\UserController::class, 'myPage'])->name('mypage');
    Route::resource('courses', CoursesController::class);
    Route::resource('bookings', BookingController::Class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 講師のrouting
Route::resource('teachers', TeacherController::class);

Auth::routes();


