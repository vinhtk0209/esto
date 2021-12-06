<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use App\Models\DanhMuc;
use App\Models\LoaiTK;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    public function index()
    {
        $taikhoan = TaiKhoan::all();
        return view('admin.taikhoan.index', ['taikhoan'=>$taikhoan]);
    }

    public function create()
    {
        $loaitk = LoaiTK::All();
        $taikhoan = TaiKhoan::where('ID', '>', 0)->get();
        return view('admin.taikhoan.create', ['taikhoan' => $taikhoan]);
    }

    public function store(Request $request)
    {
        $taikhoan = new taikhoan();
        $taikhoan->HOTEN = $request->HOTEN;
        $taikhoan->NGAYSINH = $request->NGAYSINH;
        $taikhoan->GIOITINH = $request->GIOITINH;
        $taikhoan->SODIENTHOAI = $request->SODIENTHOAI;
        $taikhoan->EMAIL = $request->EMAIL;
        $taikhoan->MATKHAU = $request->MATKHAU;
        $taikhoan->MALOAI = $request->MALOAI;
        $taikhoan->TRANGTHAI = $request->TRANGTHAI;
        $taikhoan->CTCANHAN = $request->CTCANHAN;
        $taikhoan->MACHUNGCHI = $request->MACHUNGCHI;
        if($request->GIOITINH == 'checked'){

            $taikhoan->GIOITINH = true;  
        } 
        else {

            $taikhoan->GIOITINH = false;  
        }   
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/images/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/images/", $hinh);
            $taikhoan->ANH = $hinh;
        } else {
            $taikhoan->ANH = "";
        }

        $taikhoan->save();

        return redirect('admin/taikhoan/them')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', 0)->get();
        $taikhoan = taikhoan::find($id);
        return view('admin.taikhoan.edit', ['taikhoan' => $taikhoan], ['taikhoan' => $taikhoan]);
    }

    public function update(Request $request, $id)
    {
        $taikhoan = new taikhoan();
        $taikhoan->HOTEN = $request->HOTEN;
        $taikhoan->NGAYSINH = $request->NGAYSINH;
        $taikhoan->GIOITINH = $request->GIOITINH;
        $taikhoan->SODIENTHOAI = $request->SODIENTHOAI;
        $taikhoan->EMAIL = $request->EMAIL;
        $taikhoan->MATKHAU = $request->MATKHAU;
        $taikhoan->MALOAI = $request->MALOAI;
        $taikhoan->TRANGTHAI = $request->TRANGTHAI;
        $taikhoan->CTCANHAN = $request->CTCANHAN;
        $taikhoan->MACHUNGCHI = $request->MACHUNGCHI;
        if($request->GIOITINH == 'checked'){

            $taikhoan->GIOITINH = true;  
        } 
        else {

            $taikhoan->GIOITINH = false;  
        }   
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("public/images/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("public/images/", $hinh);
            $taikhoan->ANH = $hinh;
        } else {
            $taikhoan->ANH = "";
        }

        $taikhoan->save();

        

        return redirect('admin/taikhoan/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $taikhoan = taikhoan::find($id);
        $taikhoan->delete();

        return redirect('admin/taikhoan/')->with('thongbao', 'Xóa thành công!');
    }

}
