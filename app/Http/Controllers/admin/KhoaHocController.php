<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\KhoaHoc;
use App\Models\DanhMucCon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KhoaHocController extends Controller
{
    public function index()
    {
        $khoahoc = KhoaHoc::all();
        return view('admin.khoahoc.index', ['khoahoc' => $khoahoc]);
    }

    public function create()
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', 0)->get();
        return view('admin.khoahoc.create', ['danhmuc' => $danhmuc]);
    }

    public function store(Request $request)
    {
        $khoahoc = new KhoaHoc();
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MADM = $request->MADM;
        if($request->tructuyen == 'checked'){

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
        return view('admin.khoahoc.edit', ['khoahoc' => $khoahoc], ['danhmuc' => $danhmuc]);
    }

    public function update(Request $request, $id)
    {
        $khoahoc = KhoaHoc::find($id);
        $khoahoc->TENKH = $request->TENKH;
        $khoahoc->DONGIA = $request->DONGIA;
        $khoahoc->MADM = $request->MADM;
        if($request->video == 'checked'){

            $khoahoc->TRUCTUYEN = false;  
        } 
        else {

            $khoahoc->TRUCTUYEN = true;  
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
