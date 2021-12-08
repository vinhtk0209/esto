<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use App\Models\DanhMuc;
use App\Models\KhoaHoc;
use App\Models\DanhMucCon;
use App\Models\LopHoc;
use App\Models\LopHoc_BaiHoc;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KhoaHocController extends Controller
{
    public function index()
    {
        $khoahoc = KhoaHoc::paginate(5);
        return view('admin.khoahoc.index', ['khoahoc' => $khoahoc]);
    }

    public function create()
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', 0)->get();
        $taikhoan = TaiKhoan::where('MALOAI', '=', 2)->get();
        return view('admin.khoahoc.create', compact('danhmuc', 'taikhoan'));
    }

    public function store(Request $request)
    {
        $khoahoc = new KhoaHoc();
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MADM = $request->MADM;
        $khoahoc->MATK = $request->MATK;
        if($request->hinhthuc == '1'){

            $khoahoc->TRUCTUYEN = true;  
        } 
        else {

            $khoahoc->TRUCTUYEN = false;  
        }   
        $khoahoc->GIOITHIEUKH = $request->GIOITHIEUKH;
        $khoahoc->CHITIETKH = $request->CHITIETKH;
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/images/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/images/", $hinh);
            $khoahoc->ANH = $hinh;
        } else {
            $khoahoc->ANH = "";
        }

        $khoahoc->save();

        return redirect('admin/khoahoc/them')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', 0)->get();
        $khoahoc = KhoaHoc::find($id);
        $taikhoan = TaiKhoan::where('MALOAI', '=', 2)->get();
        return view('admin.khoahoc.edit', compact('danhmuc', 'khoahoc', 'taikhoan'));
    }

    public function update(Request $request, $id)
    {
        $khoahoc = KhoaHoc::find($id);
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MAGV = $request->MATK;
        $khoahoc->MADM = $request->MADM;
        if($request->hinhthuc == '1'){

            $khoahoc->TRUCTUYEN = true;  
        } 
        else {

            $khoahoc->TRUCTUYEN = false;  
        }   
        $khoahoc->GIOITHIEUKH = $request->GIOITHIEUKH;
        $khoahoc->CHITIETKH = $request->CHITIETKH;
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/images/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/images/", $hinh);
            $khoahoc->ANH = $hinh;
        } 
        $khoahoc->save();

        return redirect('admin/khoahoc/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $khoahoc = KhoaHoc::find($id);
        $khoahoc->delete();

        return redirect('admin/khoahoc/')->with('thongbao', 'Xóa thành công!');
    }
}
