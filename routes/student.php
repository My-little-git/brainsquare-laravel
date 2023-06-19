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

Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::group(['namespace' => 'Auth', 'middleware' => 'guest'], function () {

        Route::get('/login', LoginController::class)->name('login');
        Route::get('/register', RegisterController::class)->name('register');

    });

    Route::get('/', HomeController::class)->name('home');
    Route::get('/schedule', ScheduleController::class)->name('schedule');
    Route::get('/homework', HomeworkController::class)->name('homework');
    Route::get('/performance', PerformanceController::class)->name('performance');
    Route::get('/basket', BasketController::class)->name('basket');

    Route::group(['namespace' => 'Course'], function () {

        Route::get('/courses', IndexController::class)->name('course.index');

    });

});


