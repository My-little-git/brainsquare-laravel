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

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'auth:admin'], function () {

    Route::group(['namespace' => 'Auth'], function() {

        Route::post('/logout', LogoutController::class)->name('logout');

    });

    Route::group(['namespace' => 'Center', 'as' => 'center.'], function() {

        Route::get('/centers', IndexController::class)->name('index');
        Route::post('/centers', StoreController::class)->name('store');
        Route::get('/center/{center}/edit', EditController::class)->name('edit');
        Route::patch('/center/{center}', UpdateController::class)->name('update');
        Route::delete('/center/{center}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Audience', 'as' => 'audience.'], function() {

        Route::get('/audiences/create', CreateController::class)->name('create');
        Route::post('/audiences', StoreController::class)->name('store');
        Route::get('/audience/{audience}/edit', EditController::class)->name('edit');
        Route::patch('/audience/{audience}', UpdateController::class)->name('update');
        Route::delete('/audience/{audience}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Coupon', 'as' => 'coupon.'], function() {

        Route::get('/coupons', IndexController::class)->name('index');
        Route::get('/coupons/create', CreateController::class)->name('create');
        Route::post('/coupons', StoreController::class)->name('store');
        Route::get('/coupon/{coupon}/edit', EditController::class)->name('edit');
        Route::patch('/coupon/{coupon}', UpdateController::class)->name('update');
        Route::delete('/coupon/{coupon}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Course', 'as' => 'course.'], function() {

        Route::get('/courses', IndexController::class)->name('index');
        Route::get('/course/{course}', ShowController::class)->name('show');
        Route::get('/courses/create', CreateController::class)->name('create');
        Route::post('/courses', StoreController::class)->name('store');
        Route::get('/course/{course}/edit', EditController::class)->name('edit');
        Route::patch('/course/{course}', UpdateController::class)->name('update');
        Route::delete('/course/{course}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Lesson', 'as' => 'lesson.'], function() {

        Route::get('/lessons', IndexController::class)->name('index');
        Route::get('/lesson/{lesson}/edit', EditController::class)->name('edit');
        Route::patch('/lesson/{lesson}', UpdateController::class)->name('update');
        Route::delete('/lesson/{lesson}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Order', 'as' => 'order.'], function() {

        Route::get('/orders', IndexController::class)->name('index');
        Route::get('/order/{order}', ShowController::class)->name('show');
        Route::get('/order/{order}/edit', EditController::class)->name('edit');
        Route::patch('/order/{order}', UpdateController::class)->name('update');
        Route::delete('/order/{order}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Student', 'as' => 'student.'], function() {

        Route::get('/students', IndexController::class)->name('index');
        Route::get('/student/{student}', ShowController::class)->name('show');
        Route::delete('/student/{student}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Subject', 'as' => 'subject.'], function() {

        Route::get('/subjects', IndexController::class)->name('index');
        Route::get('/subjects/create', CreateController::class)->name('create');
        Route::post('/subjects', StoreController::class)->name('store');
        Route::get('/subject/{subject}/edit', EditController::class)->name('edit');
        Route::patch('/subject/{subject}', UpdateController::class)->name('update');
        Route::delete('/subject/{subject}', DestroyController::class)->name('destroy');

    });

    Route::group(['namespace' => 'Teacher', 'as' => 'teacher.'], function() {

        Route::get('/teachers', IndexController::class)->name('index');
        Route::get('/teacher/{teacher}', ShowController::class)->name('show');
        Route::get('/teachers/create', CreateController::class)->name('create');
        Route::post('/teachers', StoreController::class)->name('store');
        Route::get('/teacher/{teacher}/edit', EditController::class)->name('edit');
        Route::patch('/teacher/{teacher}', UpdateController::class)->name('update');
        Route::delete('/teacher/{teacher}', DestroyController::class)->name('destroy');

    });

});


