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
            ->orderby('khoahoc.MAKH', 'desc')->limit(8)
            ->get();
        $countRateBestSeller = [];
        $ratingBestSeller = [];
        foreach ($listCourse as $coursesBestSeller) {
            $countRateBestSeller[$coursesBestSeller->MAKH] = DB::table('danhgia')->where('danhgia.MAKH', $coursesBestSeller->MAKH)->count();
            if ($countRateBestSeller[$coursesBestSeller->MAKH] > 0) {
                $ratingBestSeller[$coursesBestSeller->MAKH] = DB::table('danhgia')->join('khoahoc', 'danhgia.MAKH', '=', 'khoahoc.MAKH')
                    ->where('khoahoc.MAKH', $coursesBestSeller->MAKH)->avg('SOSAO');
            } else {
                $ratingBestSeller[$coursesBestSeller->MAKH] = 0;
            }
        }



        //2
        $listEnglishCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->where("khoahoc.MADM", 9)
            ->orderby('khoahoc.MAKH', 'desc')
            ->limit(8)
            ->get();
        $countRateEnglish = [];
        $ratingEnglish = [];
        foreach ($listEnglishCourse as $coursesEnglish) {
            $countRateEnglish[$coursesEnglish->MAKH] = DB::table('danhgia')->where('danhgia.MAKH', $coursesEnglish->MAKH)->count();
            if ($countRateEnglish[$coursesEnglish->MAKH] > 0) {
                $ratingEnglish[$coursesEnglish->MAKH] = DB::table('danhgia')->join('khoahoc', 'danhgia.MAKH', '=', 'khoahoc.MAKH')
                    ->where('khoahoc.MAKH', $coursesEnglish->MAKH)->avg('SOSAO');
            } else {
                $ratingEnglish[$coursesEnglish->MAKH] = 0;
            }
        }

        //3
        $listBusinessCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->where("khoahoc.MADM", 18)
            ->orderby('khoahoc.MAKH', 'desc')
            ->get();

        $countRateBusiness = [];
        $ratingBusiness = [];
        foreach ($listBusinessCourse as $coursesBusiness) {
            $countRateBusiness[$coursesBusiness->MAKH] = DB::table('danhgia')->where('danhgia.MAKH', $coursesBusiness->MAKH)->count();
            if ($countRateBusiness[$coursesBusiness->MAKH] > 0) {
                $ratingBusiness[$coursesBusiness->MAKH] = DB::table('danhgia')->join('khoahoc', 'danhgia.MAKH', '=', 'khoahoc.MAKH')
                    ->where('khoahoc.MAKH', $coursesBusiness->MAKH)->avg('SOSAO');
            } else {
                $ratingBusiness[$coursesBusiness->MAKH] = 0;
            }
        }

        //4
        $listHealthyCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->where("khoahoc.MADM", 15)
            ->orderby('khoahoc.MAKH', 'desc')
            ->limit(8)
            ->get();
        $countRateHealthy = [];
        $ratingHealthy = [];
        foreach ($listHealthyCourse as $coursesHealthy) {
            $countRateHealthy[$coursesHealthy->MAKH] = DB::table('danhgia')->where('danhgia.MAKH', $coursesHealthy->MAKH)->count();
            if ($countRateHealthy[$coursesHealthy->MAKH] > 0) {
                $ratingHealthy[$coursesHealthy->MAKH] = DB::table('danhgia')->join('khoahoc', 'danhgia.MAKH', '=', 'khoahoc.MAKH')
                    ->where('khoahoc.MAKH', $coursesHealthy->MAKH)->avg('SOSAO');
            } else {
                $ratingHealthy[$coursesHealthy->MAKH] = 0;
            }
        }

        //5
        $listKM = DB::table('khoahoc')
            ->join('ctkhuyenmai', 'khoahoc.MAKH', '=', 'ctkhuyenmai.MAKH')
            ->join('khuyenmai', 'ctkhuyenmai.MAKM', '=', 'khuyenmai.MAKM')
            ->where('khuyenmai.NGAYBD', '<=', $today)
            ->where('khuyenmai.NGAYKT', '>=', $today)
            ->get();


        return view('user.homepage.index', compact('cateCourse', 'listCourse', 'listEnglishCourse', 'listBusinessCourse', 'listHealthyCourse', 'listKM', 'countRateBestSeller', 'ratingBestSeller', 'countRateEnglish', 'ratingEnglish', 'countRateBusiness', 'ratingBusiness', 'countRateHealthy', 'ratingHealthy'));
    }
    public function infoManager($path, Request $request)
    {
        $fullPath = $request->path();
        return view('user.infoManager.index', compact('fullPath'));
    }
    public function search(Request $request)
    {
        $q = $request->q;
        $courses = KhoaHoc::join("taikhoan", 'khoahoc.MAGV', '=', 'ID')->where('TENKH', 'like', '%' . $q . '%')->orWhere('HOTEN', 'like', '%' . $q . '%')->get();
        return view('user.search.index', compact('courses', 'q'));
    }

    public function ajaxSearch()
    {
        $data = KhoaHoc::search()->limit(5)->get();
        return view('user.search.ajaxSearch', compact('data'));
    }
}
