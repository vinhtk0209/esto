<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ChungChi;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ThongTinCNController extends Controller
{
    public function index()
    {
        $taikhoan = TaiKhoan::find(session('login')->ID);
        $chungchi = ChungChi::where('MAGV', '=', $taikhoan->ID)->get();
        return view('admin.thongtincanhan.index', compact('taikhoan', 'chungchi'));
    }

    public function update(Request $request)
    {
        $taikhoan = TaiKhoan::find(session('login')->ID);
        $taikhoan->HOTEN = $request->HOTEN;
        $taikhoan->NGAYSINH = $request->NGAYSINH;
        $taikhoan->SODIENTHOAI = $request->SODIENTHOAI;
        if ($request->GIOITINH == '1') { $taikhoan->GIOITINH = true;}
        else {$taikhoan->GIOITINH = false;}
        $taikhoan->EMAIL = $request->EMAIL;
        $taikhoan->CTCANHAN = $request->CTCANHAN;
        if ($request->hasFile('ANH')) {
            $file = $request->file('ANH');
            $name = $file->getClientOriginalName();
            $hinh = Str::random(4) . "_" . $name;
            while (file_exists("./images/" . $hinh)) {
                $hinh = Str::random(4) . "_" . $name;
            }
            $file->move("./images/", $hinh);
            $taikhoan->ANHDAIDIEN = $hinh;
        }
        $taikhoan->save();
        return redirect('admin/thongtincanhan')->with('thongbao', 'Sửa thành công!');
    }
}
