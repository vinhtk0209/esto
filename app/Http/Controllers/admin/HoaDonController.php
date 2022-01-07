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
        $hoadon = DB::table('hoadon')
            ->join('taikhoan', 'hoadon.MAHV', '=', 'taikhoan.ID')
            ->paginate(10);

        $khoahoc = DB::table('khoahoc')
            ->join('cthoadon', 'khoahoc.MAKH', '=', 'cthoadon.MAKH')
            ->join('hoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')
            ->get();

        $tien = DB::table('khoahoc')
            ->join('cthoadon', 'khoahoc.MAKH', '=', 'cthoadon.MAKH')
            ->join('hoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')
            ->sum('khoahoc.DONGIA');
        return view('admin.hoadon.index', ['hoadon' => $hoadon], ['khoahoc' => $khoahoc], ['tien' => $tien]);
    }

    public function detail($id)
    {
        $tenHV = DB::table('hoadon')
            ->join('taikhoan', 'hoadon.MAHV', '=', 'taikhoan.ID')
            ->where('hoadon.MAHD', $id)
            ->get();

        $tien = 0;
        // $tien = DB::table('khoahoc')
        // ->join('cthoadon', 'khoahoc.MAKH', '=', 'cthoadon.MAKH')
        // ->join('hoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')     
        // ->where('hoadon.MAHD',$id)
        // ->sum('khoahoc.DONGIA');

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
    }

    public function delete($id)
    {
        $cat = HoaDon::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công!');
    }
}
