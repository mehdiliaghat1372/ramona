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

Route::get('/', [
    'uses' => 'Front\HomeController@show',
    'as' => 'home',
]);
Route::get('/categories/{category}', [
    'uses' => 'Front\CategoriesController@show',
    'as' => 'categories.show',
]);
Route::get('/videos', [
    'uses' => 'Front\VideosController@show',
    'as' => 'videos.show',
]);

Route::get('/auth/sign-in', [
    'uses' => 'Auth\SignInController@show',
    'as' => 'auth.sign-in',
]);
Route::post('/auth/sign-in', [
    'uses' => 'Auth\SignInController@request',
]);
Route::get('/auth/sign-out', [
    'uses' => 'Auth\SignOutController@handle',
    'as' => 'auth.sign-out',
]);

Route::group(['middleware' => 'auth'], function () {
    // Admin
    Route::group(['prefix' => '/admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
        Route::get('/', [
            'uses' => 'DashboardController@show',
            'as' => 'dashboard',
        ]);
        Route::resources([
            'users' => 'UsersController',
            'categories' => 'CategoriesController',
            'videos' => 'VideosController',
        ]);
    });
});
