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
Route::get('/listCourse/{courseCate}', [
    'as' => 'home.listCourse',
    'uses' => 'App\Http\Controllers\user\productController@listCourse'
]);

//XAC NHAN EMAIL
Route::get('/confirmEmail', [
    'as' => 'mail.confirmEmail',
    'uses' => 'App\Http\Controllers\user\mailController@confirmEmail'
]);
Route::get('/actived/{taikhoan}/{token}', [
    'as' => 'taikhoan.actived',
    'uses' => 'App\Http\Controllers\user\loginController@actived'
]);

//QUEN MAT KHAU
Route::get('/forgotPassword', [
    'as' => 'login.forgotPass',
    'uses' => 'App\Http\Controllers\user\loginController@forgotPass'
]);
Route::post('/forgotPassword', [
    'as' => 'login.postForgotPass',
    'uses' => 'App\Http\Controllers\user\loginController@postForgotPass'
]);
Route::get('/getPassword/{taikhoan}/{token}', [
    'as' => 'taikhoan.getPass',
    'uses' => 'App\Http\Controllers\user\loginController@getPass'
]);
Route::post('/getPassword/{taikhoan}/{token}', [
    'as' => 'taikhoan.postGetPass',
    'uses' => 'App\Http\Controllers\user\loginController@postGetPass'
]);
Route::post('/search', [
    'as' =>  'home.search',
    'uses' => 'App\Http\Controllers\user\homeController@search'
]);
Route::get('/add-to-cart', [
    'as' =>  'add.to.cart',
    'uses' => 'App\Http\Controllers\user\productController@addToCart'
]);
Route::get('/cart', [
    'as' =>  'home.cart',
    'uses' => 'App\Http\Controllers\user\productController@getCart'
]);
Route::get('/delete-item/{id}', [
    'as' =>  'delete.item',
    'uses' => 'App\Http\Controllers\user\productController@deleteItem'
]);
Route::get('/increase-item/{id}', [
    'as' =>  'increase.item',
    'uses' => 'App\Http\Controllers\user\productController@increaseItem'
]);
Route::get('/decrease-item/{id}', [
    'as' =>  'decrease.item',
    'uses' => 'App\Http\Controllers\user\productController@decreaseItem'
]);
Route::get('/checkout', [
    'as' =>  'home.checkout',
    'uses' => 'App\Http\Controllers\user\orderController@checkout'
]);
Route::post('/checkout', [
    'as' =>  'handle.checkout',
    'uses' => 'App\Http\Controllers\user\orderController@handleCheckout'
]);
