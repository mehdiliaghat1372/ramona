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
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', [
            'uses' => 'Admin\DashboardController@show',
            'as' => 'admin.dashboard',
        ]);
        Route::get('/users', [
            'uses' => 'Admin\UsersController@index',
            'as' => 'admin.users.index',
        ]);
        Route::get('/users/create', [
            'uses' => 'Admin\UsersController@create',
            'as' => 'admin.users.create',
        ]);
        Route::post('/users', [
            'uses' => 'Admin\UsersController@store',
            'as' => 'admin.users.store'
        ]);
        Route::get('/users/{user}/edit', [
            'uses' => 'Admin\UsersController@edit',
            'as' => 'admin.users.edit',
        ]);
        Route::put('/users/{user}', [
            'uses' => 'Admin\UsersController@update',
            'as' => 'admin.users.update'
        ]);
        Route::get('/users/{user}/delete', [
            'uses' => 'Admin\UsersController@delete',
            'as' => 'admin.users.delete'
        ])->where(['user' => '[0-9]+']);
    });
});
