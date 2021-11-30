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

Route::get('/home', [
    'as' =>  'home.index',
    'uses' => 'App\Http\Controllers\user\homeController@index'
]);
Route::get('/login', [
    'as' => 'login.login',
    'uses' => 'App\Http\Controllers\user\loginController@login'
]);
Route::get('/register', [
    'as' => 'login.register',
    'uses' => 'App\Http\Controllers\user\loginController@register'
]);