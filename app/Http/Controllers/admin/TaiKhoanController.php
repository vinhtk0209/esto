<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoaiTK;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TaiKhoanController extends Controller
{
    public function index()
    {
        $taikhoan = TaiKhoan::paginate(10);
        return view('admin.taikhoan.index', ['taikhoan' => $taikhoan]);
    }

    public function create()
    {
        $loaitk = LoaiTK::where('MALOAI', '>', 1)->get();
        return view('admin.taikhoan.create', ['loaitk' => $loaitk]);
    }

    public function store(Request $request)
    {
        $taikhoan = new taikhoan();
        $taikhoan->HOTEN = $request->HOTEN;
        $taikhoan->NGAYSINH = $request->NGAYSINH;
        $taikhoan->SODIENTHOAI = $request->SODIENTHOAI;
        if ($request->GIOITINH == '1') $taikhoan->GIOITINH = true;
        else $taikhoan->GIOITINH = false;
        if ($request->TRANGTHAI == '1') $taikhoan->TRANGTHAI = true;
        else $taikhoan->TRANGTHAI = false;
        $taikhoan->EMAIL = $request->EMAIL;
        $taikhoan->MATKHAU = $request->MATKHAU;
        $taikhoan->MALOAI = $request->MALOAI;
        $taikhoan->CTCANHAN = $request->CTCANHAN;
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/images/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/images/", $hinh);
            $taikhoan->ANHDAIDIEN = $hinh;
        } else {
            $taikhoan->ANHDAIDIEN = "";
        }

        $taikhoan->save();

        return redirect('admin/taikhoan/them')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $taikhoan = TaiKhoan::find($id);
        if ($taikhoan->TRANGTHAI == '1') $taikhoan->TRANGTHAI = false;
        else $taikhoan->TRANGTHAI = true;
        $taikhoan->save();
        return redirect('admin/taikhoan/');
    }

    public function delete($id)
    {
        $taikhoan = taikhoan::find($id);
        $taikhoan->delete();

        return redirect('admin/taikhoan/')->with('thongbao', 'Xóa thành công!');
    }

}
