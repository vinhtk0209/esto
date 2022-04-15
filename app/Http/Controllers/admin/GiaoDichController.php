<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\HoaDon;
use App\Models\CTHoaDon;

class GiaoDichController extends Controller
{
    public function index()
    {
        $hoadon = DB::table('hoadon') 
        ->join('taikhoan','hoadon.MAHV', '=', 'taikhoan.ID')
        ->paginate(10);

        // $tien = 0;

        // $khoahoc = DB::table('khoahoc')
        // ->join('cthoadon', 'khoahoc.MAKH', '=', 'cthoadon.MAKH')
        // ->join('hoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')
        // ->get();

        // foreach ($khoahoc as $kh)
        // {
        //     $tien += $kh->DONGIA;
        // }
        // $tien = DB::table('khoahoc')
        // ->join('cthoadon', 'khoahoc.MAKH', '=', 'cthoadon.MAKH')
        // ->join('hoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')
        // ->sum('khoahoc.DONGIA');
        return view('admin.giaodich.index',compact('hoadon'));
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
        ->where('hoadon.MAHD',$id)
        ->get();
        foreach ($detail as $dt)
        {
            $tien +=$dt->DONGIA;
        }
        return view('admin.giaodich.detail', compact('tien', 'detail', 'tenHV'));
    }

    public function delete($id)
    {
        try {
            $cat = HoaDon::find($id)->delete();
            return redirect()->back()->with('success', 'Xóa thành công!');
        } catch (Exception $error) {
            return redirect()->back()->with('failed', 'Xóa thất bại');
        }
    }
}
