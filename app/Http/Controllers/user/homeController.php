<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\DanhMucCon;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use Carbon\Carbon;

class homeController extends Controller
{
    public function index()
    {
        $cateCourse = DanhMuc::where('MADMCHA', 0)->where('ACTIVE', 1)->orderby('MADM', 'desc')->get();
        $today = Carbon::createFromTimestamp(strtotime(date("Y-m-d h:i:sa")));

        //1
        $listCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
        ->join('ctkhuyenmai','khoahoc.MAKH','=','ctkhuyenmai.MAKH')
        ->join('khuyenmai', 'ctkhuyenmai.MAKM', '=', 'khuyenmai.MAKM')
        ->where('khuyenmai.NGAYBD','<=',$today)
        ->where('khuyenmai.NGAYKT','>=',$today)
        ->orderby('khoahoc.MAKH', 'desc')->limit(8)
        ->get();
        //2
        $listEnglishCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
        ->join('ctkhuyenmai','khoahoc.MAKH','=','ctkhuyenmai.MAKH')
        ->join('khuyenmai', 'ctkhuyenmai.MAKM', '=', 'khuyenmai.MAKM')
        ->where('khuyenmai.NGAYBD','>=',$today)
        ->where('khuyenmai.NGAYKT','<=',$today)
        ->where("khoahoc.MADM", 9)
        ->orderby('khoahoc.MAKH', 'desc')
        ->limit(8)
        ->get();
        //3
        $listBusinessCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
        ->join('ctkhuyenmai','khoahoc.MAKH','=','ctkhuyenmai.MAKH')
        ->join('khuyenmai', 'ctkhuyenmai.MAKM', '=', 'khuyenmai.MAKM')
        ->where('khuyenmai.NGAYBD','<=',$today)
        ->where('khuyenmai.NGAYKT','>=',$today)
        ->where("khoahoc.MADM", 18)
        ->orderby('khoahoc.MAKH', 'desc')
        ->get();

        //4
        $listHealthyCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
        ->join('ctkhuyenmai','khoahoc.MAKH','=','ctkhuyenmai.MAKH')
        ->join('khuyenmai', 'ctkhuyenmai.MAKM', '=', 'khuyenmai.MAKM')
        ->where('khuyenmai.NGAYBD','<=',$today)
        ->where('khuyenmai.NGAYKT','>=',$today)
        ->where("khoahoc.MADM", 15)
        ->orderby('khoahoc.MAKH', 'desc')
        ->limit(8)
        ->get();

        //5
        
        

        return view('user.homepage.index', compact('cateCourse', 'listCourse', 'listEnglishCourse', 'listBusinessCourse', 'listHealthyCourse'));
    }
    public function infoManager()
    {
        return view('user.infoManager.index');
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $courses = KhoaHoc::join("taikhoan", 'khoahoc.MAGV', '=', 'ID')->where('TENKH', 'like', '%' . $q . '%')->orWhere('HOTEN', 'like', '%' . $q . '%')->get();
        return view('user.search.index', compact('courses', 'q'));
    }
}