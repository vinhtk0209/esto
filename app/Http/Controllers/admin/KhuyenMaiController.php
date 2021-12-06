<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhuyenMai;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    public function index()
    {
        $khuyenmai = KhuyenMai::all();
        return view('admin.khuyenmai.index', ['khuyenmai'=>$khuyenmai]);
    }

    public function chitietkm()
    {
        $khoahoc = KhoaHoc::all();
        return view('admin.khuyenmai.chitietkm', ['khoahoc'=>$khoahoc]);
    }
}
