<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhGia;
use App\Models\KhoaHoc;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class DanhGiaController extends Controller
{
    public function index()
    {
        if (session('login')->LOAITK == 3) {
            $khoahoc = KhoaHoc::paginate(10);
            return view('admin.danhgia.index', ['khoahoc' => $khoahoc]);
        } else {
            return view('admin.thongbao.index');
        }
    }
    public function viewdanhgia($id)
    {
        if (session('login')->LOAITK == 3) {
            $danhgia = DanhGia::where('MAKH', '=', $id)->paginate(10);
            $khoahoc = KhoaHoc::find($id);
            return view('admin.danhgia.ctdanhgia', compact('danhgia', 'id', 'khoahoc'));
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function delete($id)
    {
        if (session('login')->LOAITK == 3) {
            $danhgia = DanhGia::find($id);
            $danhgia->delete();

            return redirect('admin/danhgia/ctdanhgia/{{$id}}')->with('thongbao', 'Xóa thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }
}