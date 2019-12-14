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

        Route::get('/categories', [
            'uses' => 'Admin\CategoriesController@index',
            'as' => 'admin.categories.index',
        ]);
        Route::get('/categories/create', [
            'uses' => 'Admin\CategoriesController@create',
            'as' => 'admin.categories.create',
        ]);
        Route::post('/categories', [
            'uses' => 'Admin\CategoriesController@store',
            'as' => 'admin.categories.store'
        ]);
        Route::get('/categories/{category}/edit', [
            'uses' => 'Admin\CategoriesController@edit',
            'as' => 'admin.categories.edit',
        ]);
        Route::put('/categories/{category}', [
            'uses' => 'Admin\CategoriesController@update',
            'as' => 'admin.categories.update'
        ]);
        Route::get('/categories/{category}/delete', [
            'uses' => 'Admin\CategoriesController@delete',
            'as' => 'admin.categories.delete'
        ])->where(['user' => '[0-9]+']);
    });
});
