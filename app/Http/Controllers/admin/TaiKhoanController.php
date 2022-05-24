<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\ChungChi;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TaiKhoanController extends Controller
{
    public function index()
    {
        if (session('login')->LOAITK == 3) {
            $taikhoan = TaiKhoan::paginate(10);
            return view('admin.taikhoan.index', ['taikhoan' => $taikhoan]);
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function create()
    {
        if (session('login')->LOAITK == 3) {
            return view('admin.taikhoan.create');
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function search($id)
    {
        if (session('login')->LOAITK == 3) {
            $taikhoan = TaiKhoan::where('LOAITK', '=', $id)->paginate(10);
            return view('admin.taikhoan.index', ['taikhoan' => $taikhoan]);
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function store(Request $request)
    {
        if (session('login')->LOAITK == 3) {
            $taikhoan = new taikhoan();
            $this->validate($request, [
                'SODIENTHOAI' => 'required|digits:10'
            ]);

            $taikhoan->HOTEN = $request->HOTEN;
            $taikhoan->NGAYSINH = $request->NGAYSINH;
            $taikhoan->SODIENTHOAI = $request->SODIENTHOAI;
            if ($request->GIOITINH == '1') {
                $taikhoan->GIOITINH = true;
            } else {
                $taikhoan->GIOITINH = false;
            }
            if ($request->TRANGTHAI == '1') {
                $taikhoan->TRANGTHAI = true;
            } else {
                $taikhoan->TRANGTHAI = false;
            }
            $taikhoan->EMAIL = $request->EMAIL;
            if ($request->MATKHAU != $request->MATKHAU1) {
                return redirect('admin/taikhoan/them')->with('thongbao', 'nhập lại mật khẩu!');
            } else {
                $taikhoan->MATKHAU = bcrypt($request->MATKHAU);
            }

            $taikhoan->LOAITK = $request->LOAITK;
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
            } else {
                $taikhoan->ANHDAIDIEN = "";
            }
            $taikhoan->save();
            return redirect('admin/taikhoan/them')->with('thongbao', 'Thêm thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function edit($id)
    {
        if (session('login')->LOAITK == 3) {
            $taikhoan = TaiKhoan::find($id);
            $chungchi = ChungChi::where('MAGV', '=', $taikhoan->ID)->get();
            return view('admin.taikhoan.edit', compact('taikhoan', 'chungchi'));
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function update(Request $request, $id)
    {
        if (session('login')->LOAITK == 3) {
            $taikhoan = TaiKhoan::find($id);
            $taikhoan->HOTEN = $request->HOTEN;
            $taikhoan->NGAYSINH = $request->NGAYSINH;
            $taikhoan->SODIENTHOAI = $request->SODIENTHOAI;
            if ($request->GIOITINH == '1') {
                $taikhoan->GIOITINH = true;
            } else {
                $taikhoan->GIOITINH = false;
            }
            if ($request->TRANGTHAI == '1') {
                $taikhoan->TRANGTHAI = true;
            } else {
                $taikhoan->TRANGTHAI = false;
            }
            $taikhoan->EMAIL = $request->EMAIL;
            $taikhoan->LOAITK = $request->LOAITK;
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
            } else {
                $taikhoan->ANHDAIDIEN = "";
            }
            $taikhoan->save();
            return redirect('admin/taikhoan/sua/' . $id)->with('thongbao', 'Sửa thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function createChungChi($id)
    {
        if (session('login')->LOAITK == 3) {
            return view('admin.taikhoan.chungchi', ['id' => $id]);
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function storeChungChi(Request $request, $id)
    {
        if (session('login')->LOAITK == 3) {
            $chungchi = new ChungChi();
            if ($request->hasFile('ANHCC')) {
                $file = $request->file('ANHCC');
                $name = $file->getClientOriginalName();
                $hinh = Str::random(4) . "_" . $name;
                while (file_exists("./images/" . $hinh)) {
                    $hinh = Str::random(4) . "_" . $name;
                }
                $file->move("./images/", $hinh);
                $chungchi->ANHCHUNGCHI = $hinh;
            } else {
                $chungchi->ANHCHUNGCHI = "";
            }
            $chungchi->MAGV = $id;
            $chungchi->HOCVI = $request->HOCVI;
            $chungchi->save();
            return redirect('admin/chungchi/' . $id)->with('thongbao', 'thêm chứng chỉ thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function delete($id)
    {
        if (session('login')->LOAITK == 3) {
            $taikhoan = taikhoan::find($id);
            $taikhoan->delete();

            return redirect('admin/taikhoan/')->with('thongbao', 'Xóa thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function editChungChi($id, $macc)
    {
        if (session('login')->LOAITK == 3) {
            $chungchi = ChungChi::find($macc);
            return view('admin.taikhoan.chungchiedit', ['chungchi' => $chungchi], ['id' => $id]);
        } else {
            return view('admin.thongbao.index');
        }
    }

    public function updateChungChi(Request $request, $id, $macc)
    {
        if (session('login')->LOAITK == 3) {
            $chungchi = ChungChi::find($macc);
            if ($request->hasFile('ANHCC')) {
                $file = $request->file('ANHCC');
                $name = $file->getClientOriginalName();
                $hinh = Str::random(4) . "_" . $name;
                while (file_exists("./images/" . $hinh)) {
                    $hinh = Str::random(4) . "_" . $name;
                }
                $file->move("./images/", $hinh);
                $chungchi->ANHCHUNGCHI = $hinh;
            }
            $chungchi->HOCVI = $request->HOCVI;
            $chungchi->save();



            return redirect('admin/chungchi/sua/' . $id . '&macc=' . $macc)->with('thongbao', 'Sửa chứng chỉ thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }
    public function deleteChungChi($id, $macc)
    {
        if (session('login')->LOAITK == 3) {
            $chungchi = ChungChi::find($macc);
            $chungchi->delete();
            return redirect('admin/taikhoan/sua/' . $id)->with('thongbao', 'Xóa chứng chỉ thành công!');
        } else {
            return view('admin.thongbao.index');
        }
    }
}