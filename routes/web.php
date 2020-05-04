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

        Route::get('/user', 'Admin\UserController@index')->name('user');
        Route::get('/info',  'Admin\UserController@showChangeInfo')->name('change_info');
        Route::get('/password', 'Admin\UserController@showChangePassword')->name('change_password');

        Route::post('/change_info', 'Admin\UserController@changeInfo')->name('info');
        Route::post('/change-password', 'Admin\UserController@changePassword')->name('password');
        Route::post('/upload-file', 'Admin\ProductController@uploadFile')->name('upload_file');
        Route::post('/image-upload', 'Admin\UploadController@uploadImage')->name('upload');

        Route::prefix('product')->name('product.')->group(function () {
            Route::get('/', 'Admin\ProductController@index')->name('index');
            Route::get('/add', 'Admin\ProductController@add')->name('add');
            Route::get('/edit/{id_product}', 'Admin\ProductController@edit')->name('edit');

            Route::post('/create', 'Admin\ProductController@create')->name('create');
            Route::post('/update/{id_product}', 'Admin\ProductController@update')->name('update');
            Route::post('/delete/{id_product}', 'Admin\ProductController@delete')->name('delete');
        });
    });
});


Route::prefix('/')->name('home.')->group(function () {
    Route::get('', 'Home\HomeController@index')->name('index');
    Route::get('lien-he', 'Home\HomeController@contact')->name('contact');
});