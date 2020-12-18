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

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::put('/cart/{course}', 'CartController@update')->name('cart.update');

    Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['admin'])->group(function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('permissions', 'PermissionController');
    });
});

Route::fallback(function(){
    return view('errors.404');
});