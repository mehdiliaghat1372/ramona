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

Route::get('/', 'Front\HomeController@show');
Route::get('/categories', 'Front\CategoriesController@show');
Route::get('/videos', 'Front\VideosController@show');

Route::get('/auth/sign-in', 'Auth\SignInController@show')->name('auth.sign-in');
Route::post('/auth/sign-in', 'Auth\SignInController@request');
Route::get('/auth/sign-out', 'Auth\SignOutController@handle')->name('auth.sign-out');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', 'Admin\DashboardController@show')->name('admin.dashboard');
        Route::get('/users', 'Admin\UsersController@index')->name('admin.users.index');
    });
});
