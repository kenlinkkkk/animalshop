<?php

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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('index');

        Route::get('/info',  'Admin\UserController@showChangeInfo')->name('change_info');
        Route::get('/password', 'Admin\UserController@showChangePassword')->name('change_password');

        Route::post('/change_info', 'Admin\UserController@changeInfo')->name('info');
        Route::post('/change_password', 'Admin\UserController@changePassword')->name('password');
    });
});
