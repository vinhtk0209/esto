<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
// use Illuminate\Support\Facades\Auth;

// Auth::routes();
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

//REGISTER LOGIN LOGOUT
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

//COURSE DETAIL
Route::get('/courseDetail/{productId}', [
    'as' => 'home.detailProduct',
    'uses' => 'App\Http\Controllers\user\productController@detailProduct'
]);

//INFO MANAGER
Route::get('/infoUser', [
    'as' => 'home.infoManager',
    'uses' => 'App\Http\Controllers\user\homeController@infoManager'
]);
Route::get('/listCourse/{courseCate}', [
    'as' => 'home.listCourse',
    'uses' => 'App\Http\Controllers\user\productController@listCourse'
]);
Route::get('/infoUser/updateProfile', [
    'as' => 'update.profile',
    'uses' => 'App\Http\Controllers\user\userController@showFormUpdateProfile'
]);
Route::post('/infoUser/updateProfile/{id}', [
    'as' => 'post.update.profile',
    'uses' => 'App\Http\Controllers\user\userController@updateProfile'
]);
Route::get('/infoUser/showMyCourse', [
    'as' => 'show.my.course',
    'uses' => 'App\Http\Controllers\user\userController@showMyCourse'
]);
Route::get('/learn/{id}', [
    'as' => 'learn.course',
    'uses' => 'App\Http\Controllers\user\userController@learnCourse'
]);

//CONFIRM EMAIL TO LOGIN
Route::get('/confirmEmail', [
    'as' => 'mail.confirmEmail',
    'uses' => 'App\Http\Controllers\user\mailController@confirmEmail'
]);
Route::get('/actived/{taikhoan}/{token}', [
    'as' => 'taikhoan.actived',
    'uses' => 'App\Http\Controllers\user\loginController@actived'
]);

//FORGOT PASSWORD AND GET PASSWORD
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

//SEARCH AJAX
Route::get('/searchCourse', [
    'as' =>  'home.ajaxSearch',
    'uses' => 'App\Http\Controllers\user\homeController@ajaxSearch'
]);
Route::post('/search', [
    'as' =>  'home.search',
    'uses' => 'App\Http\Controllers\user\homeController@search'
]);

//CART
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

//XAC NHAN EMAIL
Route::get('/confirmEmail', [
    'as' => 'mail.confirmEmail',
    'uses' => 'App\Http\Controllers\user\mailController@confirmEmail'
]);
Route::get('/actived/{taikhoan}/{token}', [
    'as' => 'taikhoan.actived',
    'uses' => 'App\Http\Controllers\user\loginController@actived'
]);

//TEST
Route::get('/exam', [
    'as' =>  'productController.exam',
    'uses' => 'App\Http\Controllers\user\productController@exam'
]);
Route::post('/exam', [
    'as' =>  'productController.handleExam',
    'uses' => 'App\Http\Controllers\user\orderController@handleExam'
]);

//LOGIN WITH SOCIAL
Route::get('/login-facebook', [
    'as' =>  'login.loginFacebook',
    'uses' => 'App\Http\Controllers\user\loginController@loginFacebook'
]);
Route::get('/lg/facebook/callback', [
    'as' =>  'login.callbackFacebook',
    'uses' => 'App\Http\Controllers\user\loginController@callbackFacebook'
]);
Route::get('/login-google', [
    'as' =>  'login.loginGoogle',
    'uses' => 'App\Http\Controllers\user\loginController@loginGoogle'
]);
Route::get('/lg/google/callback', [
    'as' =>  'login.callbackGoogle',
    'uses' => 'App\Http\Controllers\user\loginController@callbackGoogle'
]);


//LEARNING ONLINE
Route::get('/contentClass/{id}', [
    'as' =>  'product.contentClass',
    'uses' => 'App\Http\Controllers\user\productController@contentClass'
]);
Route::post('/contentClass/{id}', [
    'as' =>  'post.buyClass',
    'uses' => 'App\Http\Controllers\user\orderController@handleBuyClass'
]);