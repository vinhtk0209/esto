<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function detailProduct($productId)
    {
        $cateCourse = DB::table('danhmuc')
            ->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        $productDetail  = DB::table('khoahoc')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('khoahoc.MAKH',  $productId)->get();

        foreach ($productDetail as $value) {
            $courseCate = $value->MADM;
        }
        $relatedCourse  = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->where('danhmuc.MADM', $courseCate)
            ->whereNotIn('khoahoc.MAKH', [$productId])->get();

        return view('/user/courseDetail/index')->with('category', $cateCourse)->with('productDetail', $productDetail)->with('relatedCourse', $relatedCourse);
    }
    public function listCourse($courseCate)
    {


        $cateById = DB::table('khoahoc')->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')->where('khoahoc.MADM', '=', $courseCate)->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->get();
        //hien thi mot lan ten cua danh muc
        $cateName = DB::table('danhmuc')->where('danhmuc.MADM', $courseCate)->limit(1)->get();


        return view('user.listCourse.index')->with('cateById', $cateById)->with('cateName', $cateName);
    }
}