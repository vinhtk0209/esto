<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\KhoaHocController;
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

Route::get('/admin', [
    'as' =>  'dangnhap.login',
    'uses' => 'App\Http\Controllers\admin\LoginController@getLogin'
]);

Route::post('/admin', [
    'as' =>  'dangnhap.login',
    'uses' => 'App\Http\Controllers\admin\LoginController@postLogin'
]);

// Route::middleware(['Admin'])->prefix('admin')->name('admin.')->group(function () {
Route::prefix('admin')->name('admin.')->group(function () {


    Route::prefix('/logout')->name('logout.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\LoginController@getLogout');
    });

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\DashBoardController@index');
    });

    Route::prefix('khoahoc')->name('khoahoc.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\KhoaHocController@index');
        Route::get('/search', 'App\Http\Controllers\admin\KhoaHocController@search');
        Route::get('/them', 'App\Http\Controllers\admin\KhoaHocController@create');
        Route::post('/them/baihoc', 'App\Http\Controllers\admin\KhoaHocController@storeBaiHoc');
        Route::get('/them', 'App\Http\Controllers\admin\KhoaHocController@create');
        Route::post('/them', 'App\Http\Controllers\admin\KhoaHocController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\KhoaHocController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\KhoaHocController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\KhoaHocController@delete');
    });

    Route::prefix('baihoc')->name('baihoc.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\BaiHocController@index');

        Route::get('/search={id}', 'App\Http\Controllers\admin\BaiHocController@index');
        Route::get('/them', 'App\Http\Controllers\admin\BaiHocController@create');
        Route::post('/them', 'App\Http\Controllers\admin\BaiHocController@store');
        Route::post('/them/hinhthuc', 'App\Http\Controllers\admin\BaiHocController@hinhthuc');
        Route::get('/sua/bh={id}&lh={lh}', 'App\Http\Controllers\admin\BaiHocController@edit');
        Route::post('/sua/bh={id}&lh={lh}', 'App\Http\Controllers\admin\BaiHocController@update');
        Route::get('/xoa/bh={id}&lh={lh}', 'App\Http\Controllers\admin\BaiHocController@delete');
    });

    Route::prefix('chuonghoc')->name('chuonghoc.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\ChuongHocController@index');
        Route::post('/them', 'App\Http\Controllers\admin\ChuongHocController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\ChuongHocController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\ChuongHocController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\ChuongHocController@delete');
    });

    Route::prefix('baithi')->name('baithi.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\BaiThiController@index');

        Route::get('/search={id}', 'App\Http\Controllers\admin\BaiThiController@index');
        Route::get('/them/{id}', 'App\Http\Controllers\admin\BaiThiController@create');
        Route::post('/them/{id}', 'App\Http\Controllers\admin\BaiThiController@store');
        Route::post('/them/1/hinhthuc', 'App\Http\Controllers\admin\BaiThiController@hinhthuc');

        Route::post('/them', 'App\Http\Controllers\admin\BaiThiController@store');

        Route::get('/sua/{id}', 'App\Http\Controllers\admin\BaiThiController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\BaiThiController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\BaiThiController@delete');
        Route::get('/them/{id}/cauhoi', 'App\Http\Controllers\admin\BaiThiController@createCauHoi');
        Route::post('/them/{id}/cauhoi', 'App\Http\Controllers\admin\BaiThiController@storeCauHoi');
    });

    Route::prefix('lophoc')->name('lophoc.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\LopHocController@index');
        Route::get('/them', 'App\Http\Controllers\admin\LopHocController@create');
        Route::post('/them', 'App\Http\Controllers\admin\LopHocController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\LopHocController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\LopHocController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\LopHocController@delete');
    });

    Route::prefix('hocvien')->name('hocvien.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\HocVienController@index');
        Route::get('/ctlop/{id}', 'App\Http\Controllers\admin\HocVienController@viewlop');
        Route::get('/them', 'App\Http\Controllers\admin\HocVienController@create');
        Route::post('/them', 'App\Http\Controllers\admin\HocVienController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\HocVienController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\HocVienController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\HocVienController@delete');
    });

    Route::prefix('danhmuc')->name('danhmuc.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\DanhMucController@index');
        Route::get('/them', 'App\Http\Controllers\admin\DanhMucController@create');
        Route::post('/them', 'App\Http\Controllers\admin\DanhMucController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\DanhMucController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\DanhMucController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\DanhMucController@delete');
    });

    Route::prefix('khuyenmai')->name('khuyenmai.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\KhuyenMaiController@index');
        Route::get('/them', 'App\Http\Controllers\admin\KhuyenMaiController@create');
        Route::post('/them', 'App\Http\Controllers\admin\KhuyenMaiController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\KhuyenMaiController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\KhuyenMaiController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\KhuyenMaiController@delete');
    });

    Route::prefix('taikhoan')->name('taikhoan.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\TaiKhoanController@index');
        Route::get('/them', 'App\Http\Controllers\admin\TaiKhoanController@create');        
        Route::post('/them', 'App\Http\Controllers\admin\TaiKhoanController@store');
        Route::get('/sua/chungchi/{id}', 'App\Http\Controllers\admin\TaiKhoanController@createChungChi');   
        Route::post('/sua/chungchi/{id}', 'App\Http\Controllers\admin\TaiKhoanController@storeChungChi');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\TaiKhoanController@edit');        
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\TaiKhoanController@update');           
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\TaiKhoanController@delete');
        Route::get('/sua/chungchi/sua/{id}&macc={macc}', 'App\Http\Controllers\admin\TaiKhoanController@editChungChi');   
        Route::post('/sua/chungchi/sua/{id}&macc={macc}', 'App\Http\Controllers\admin\TaiKhoanController@updateChungChi');
        Route::get('/sua/chungchi/xoa/{id}&macc={macc}', 'App\Http\Controllers\admin\TaiKhoanController@deleteChungChi'); 
        Route::get('/search={id}', 'App\Http\Controllers\admin\TaiKhoanController@search');
    });

    Route::prefix('thongtincanhan')->name('thongtincanhan.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\ThongTinCNController@index');
        Route::get('/them', 'App\Http\Controllers\admin\ThongTinCNController@create');
        Route::post('/them', 'App\Http\Controllers\admin\ThongTinCNController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\ThongTinCNController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\ThongTinCNController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\ThongTinCNController@delete');
    });

    Route::prefix('danhgia')->name('danhgia.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\DanhGiaController@index');
        Route::get('/them', 'App\Http\Controllers\admin\DanhGiaController@create');
        Route::post('/them', 'App\Http\Controllers\admin\DanhGiaController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\DanhGiaController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\DanhGiaController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\DanhGiaController@delete');
    });

    Route::prefix('giaodich')->name('giaodich.')->group(function () {
        Route::get('/', 'App\Http\Controllers\admin\GiaoDichController@index');
        Route::get('/them', 'App\Http\Controllers\admin\GiaoDichController@create');
        Route::post('/them', 'App\Http\Controllers\admin\GiaoDichController@store');
        Route::get('/sua/{id}', 'App\Http\Controllers\admin\GiaoDichController@edit');
        Route::post('/sua/{id}', 'App\Http\Controllers\admin\GiaoDichController@update');
        Route::get('/xoa/{id}', 'App\Http\Controllers\admin\GiaoDichController@delete');
    });
});
