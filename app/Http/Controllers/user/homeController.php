<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\DanhMucCon;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index()
    {
        $cateCourse = DB::table('danhmuc')->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        $listCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->orderby('MAKH', 'desc')->limit(8)->get();
        return view('user.homepage.index')->with('category', $cateCourse)->with('listCourse', $listCourse);
    }
    public function infoManager()
    {
        return view('user.infoManager.index');
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $courses = KhoaHoc::where('TENKH','like','%' . $q . '%')->get();
        return view('user.search.index',compact('courses', 'q'));
    }
}
