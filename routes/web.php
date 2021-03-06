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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'WelcomeController')->name('inicio');

Route::get('/cart/clean', 'CartController@clean')->name('cart.clean');
Route::resource('cart', 'CartController')->parameters(['cart' => 'course']);

Route::middleware(['auth'])->group(function () {
    Route::resource('courses', 'CourseController')->except('show');

    Route::prefix('payments')->name('payments.')->group(function () {
        Route::get('/checkout', 'PaymentController@index')->name('checkout');
        Route::post('/purchase', 'PaymentController@store')->name('purchase');
        Route::get('/success', 'PaymentController@show')->name('success');
    });

    Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['admin'])->group(function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
    });
});

Route::get('/courses/{course}', 'CourseController@show')->name('courses.show');

Route::fallback(function(){
    return view('errors.404');
});