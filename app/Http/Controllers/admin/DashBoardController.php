<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CTLopHoc;
use App\Models\KhoaHoc;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        if (session('login')->LOAITK == 2) {
            $khoahoc = KhoaHoc::where('MAGV', session('login')->ID)->get();
            $hocvien = CTLopHoc::join('LopHoc', 'LopHoc.MALH', 'CTLopHoc.MALH')
            ->join('KhoaHoc', 'KhoaHoc.MAKH', 'LopHoc.MAKH')
            ->where('MAGV', session('login')->ID)->get();
        } else {
            $khoahoc = KhoaHoc::all();
            $hocvien = TaiKhoan::where('LOAITK', '1')->get();
        }
        $giangvien = TaiKhoan::where('LOAITK', '2')->get();
        return view('admin.dashboard.index', compact('khoahoc', 'hocvien', 'giangvien'));
    }
}
