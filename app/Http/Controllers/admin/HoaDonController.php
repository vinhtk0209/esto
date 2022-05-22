<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HoaDon;
use App\Models\CTHoaDon;

class HoaDonController extends Controller
{
    public function index()
    {
        if (session('login')->LOAITK == 3) {
            $hoadon = DB::table('hoadon')
                ->join('taikhoan', 'hoadon.MAHV', '=', 'taikhoan.ID')
                ->paginate(10);

            $tien = 0;

            $khoahoc = CTHoaDon::all();

            return view('admin.hoadon.index', compact('hoadon', 'khoahoc', 'tien'));
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function detail($id)
    {
        if (session('login')->LOAITK == 3) {
            $tenHV = DB::table('hoadon')
                ->join('taikhoan', 'hoadon.MAHV', '=', 'taikhoan.ID')
                ->where('hoadon.MAHD', $id)
                ->get();

            $tien = 0;

            $detail = DB::table('khoahoc')
                ->join('cthoadon', 'khoahoc.MAKH', '=', 'cthoadon.MAKH')
                ->join('hoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')
                ->join('taikhoan', 'khoahoc.MAGV', '=', 'taikhoan.ID')
                ->where('hoadon.MAHD', $id)
                ->get();
            foreach ($detail as $dt) {
                $tien += $dt->DONGIA;
            }
            return view('admin.hoadon.detail', compact('tien', 'detail', 'tenHV'));
        } else {
            return view('admin.thongbao.index');
        }
    }
}