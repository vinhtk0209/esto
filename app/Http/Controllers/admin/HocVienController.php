<?php

namespace App\Http\Controllers\admin;

use App\Models\LopHoc;
use App\Models\CTLopHoc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HocVienController extends Controller
{
    public function index()
    {
        if (session('login')->LOAITK == 2)
            $lophoc = LopHoc::join('KhoaHoc', 'KhoaHoc.MAKH', 'LopHoc.MAKH')
                ->join('TaiKhoan', 'KhoaHoc.MAGV', 'TaiKhoan.ID')
                ->where('MAGV', session('login')->ID)->paginate(10);
        else
            $lophoc = LopHoc::join('KhoaHoc', 'KhoaHoc.MAKH', 'LopHoc.MAKH')
                ->join('TaiKhoan', 'KhoaHoc.MAGV', 'TaiKhoan.ID')->paginate(10);
        return view('admin.hocvien.index', ['lophoc' => $lophoc]);
    }

    public function viewlop($id)
    {
        $ctlophoc = CTLopHoc::where('MALH', $id)->get();
        $lophoc = LopHoc::find($id);
        return view('admin.hocvien.ctlop', compact('ctlophoc', 'id', 'lophoc'));
    }
}
