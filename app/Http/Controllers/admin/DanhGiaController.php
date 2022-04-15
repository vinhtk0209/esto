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
        $khoahoc = KhoaHoc::paginate(10);
        return view('admin.danhgia.index', ['khoahoc' => $khoahoc]);
    } 
    public function viewdanhgia($id)
    {
        $danhgia = DanhGia::where('MAKH', '=', $id)->paginate(10);
        $khoahoc = KhoaHoc::find($id);
        return view('admin.danhgia.ctdanhgia' , compact('danhgia' , 'id' , 'khoahoc'));
    }     

    public function delete($id)
    {
        $danhgia = DanhGia::find($id);
        $danhgia->delete();

        return redirect('admin/danhgia/ctdanhgia/{{$id}}')->with('thongbao', 'Xóa thành công!');
    }
}