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

Route::get('/', 'Front\HomeController@show');
Route::get('/categories', 'Front\CategoriesController@show');
Route::get('/videos', 'Front\VideosController@show');

Route::get('/auth/sign-in', 'Auth\SignInController@show');
