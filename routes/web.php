<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
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
    'as' =>  'home.index',
    'uses' => 'App\Http\Controllers\user\homeController@index'
]);
Route::get('/lg', [
    'as' => 'login.login',
    'uses' => 'App\Http\Controllers\user\loginController@login'
]);
Route::post('/lg', [
    'as' => 'post.login',
    'uses' => 'App\Http\Controllers\user\loginController@postLogin'
]);
Route::get('/rs', [
    'as' => 'login.register',
    'uses' => 'App\Http\Controllers\user\loginController@register'
]);
Route::post('/rs', [
    'as' => 'post.register',
    'uses' => 'App\Http\Controllers\user\loginController@postRegister'
]);
Route::get('/logout', [
    'as' => 'logout',
    'uses' => 'App\Http\Controllers\user\loginController@logout'
]);

Route::get('/courseDetail/{productId}', [
    'as' => 'home.detailProduct',
    'uses' => 'App\Http\Controllers\user\productController@detailProduct'
]);
Route::get('/infoUser', [
    'as' => 'home.infoManager',
    'uses' => 'App\Http\Controllers\user\homeController@infoManager'
]);
Route::get('/listCourse', [
    'as' => 'home.listCourse',
    'uses' => 'App\Http\Controllers\user\homeController@listCourse'
]);