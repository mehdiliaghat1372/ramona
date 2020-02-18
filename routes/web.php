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
Route::get('/videos/{video}', [
    'uses' => 'Front\VideosController@show',
    'as' => 'videos.show',
]);
Route::post('/videos/{video}/reactions', [
    'uses' => 'Front\VideosController@react',
    'as' => 'videos.reactions',
]);
Route::post('/videos/{video}/comments', [
    'uses' => 'Front\VideosController@comment',
    'as' => 'videos.comments',
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

Route::group([], function () {
    // Admin
    Route::group(['prefix' => '/admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
        // Dashboard
        Route::get('/', [
            'uses' => 'DashboardController@show',
            'as' => 'dashboard',
        ]);
        // Admin Panels
        Route::resources([
            'users' => 'UsersController',
            'categories' => 'CategoriesController',
            'videos' => 'VideosController',
            'comments' => 'CommentsController',
            'slides' => 'SlidesController',
        ]);
        // Extended routes
        Route::patch('/comments/{comment}/accept', [
            'uses' => 'DashboardController@accept',
            'as' => 'comments.accept',
        ]);
    });
});
