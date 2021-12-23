<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function index()
    {
        $khoahoc = KhoaHoc::all();
        $hocvien = TaiKhoan::where('LOAITK', '1')->get();        
        $giangvien = TaiKhoan::where('LOAITK', '2')->get();   
        return view('admin.dashboard.index', compact('khoahoc', 'hocvien', 'giangvien'));
    }
}
