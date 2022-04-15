<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.dangnhap.login');
    }

    public function postLogin(Request $request)
    {
        $check = 0;
        $taikhoan = TaiKhoan::all();
        foreach ($taikhoan as $tk) {
            if ($tk->EMAIL == $request->EMAIL && $tk->MATKHAU == $request->MATKHAU) {
                $login = $tk;
                $check = 1;
                break;
            }
        }
        if ($check == 1) {
            session(['login' => $login]);
            return redirect('admin/dashboard');
        }
        return redirect('admin')->with('thongbao', 'Đăng nhập không thành công!');
    }

    public function getLogout()
    {
        session()->forget('login');
        return redirect('admin/');
    }
}
