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
        $data = DanhMuc::where('MADMCHA', 0)->get();
        // $courses = DB::table('khoahoc')
        //     ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
        //     ->select('*')
        //     ->get();
        $courses = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->where('MADM', '=', 1)->select('*')->get();
        return view('user.homepage.index', compact('data', 'courses'));
    }
    public function infoManager()
    {
        return view('user.infoManager.index');
    }
    public function listCourse()
    {
        return view('user.listCourse.index');
    }
}