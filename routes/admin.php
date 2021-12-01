<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use Illuminate\Contracts\Container;
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

// Route::get('/admin', [
//     'as' =>  'dangnhap.login',
//     'uses' => 'App\Http\Controllers\admin\LoginController@getLogin'
// ]);

// Route::post('/admin', [
//     'as' =>  'dangnhap.login',
//     'uses' => 'App\Http\Controllers\admin\LoginController@postLogin'
// ]);

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'App\Http\Controllers\admin\KhoaHocController@index')->name('admin.khoahoc.index');   
    
    // Route::resources([
    //     'khoahoc' => 'App\Http\Controllers\admin\KhoaHocController',
    //     'danhmuc' => 'App\Http\Controllers\admin\DanhMucController',
    //     'khuyenmai' => 'App\Http\Controllers\admin\KhuyenMaiController',
    //     'taikhoan' => 'App\Http\Controllers\admin\TaiKhoanController'
    // ]);
});

// Route::namespace('App\Http\Controllers\admin')->prefix('admin')->name('admin.')->group(function () {

//     Route::resource('khoahoc','KhoaHocController');

// });