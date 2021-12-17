<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\DanhMucCon;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;

class homeController extends Controller
{
    public function index()
    {
        $cateCourse = DanhMuc::where('MADMCHA', 0)->where('ACTIVE', 1)->orderby('MADM', 'desc')->get();
        $listCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->orderby('MAKH', 'desc')->limit(8)->get();
        return view('user.homepage.index', compact('cateCourse', 'listCourse'));
    }
    public function infoManager()
    {
        return view('user.infoManager.index');
    }
}