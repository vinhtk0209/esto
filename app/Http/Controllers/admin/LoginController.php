<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('admin.dangnhap.login');
    }

    public function postLogin(Request $request)
    {
        $check = 0;
        $login = "";
        $taikhoan = TaiKhoan::all();
        foreach ($taikhoan as $tk) {
            if ($tk->EMAIL == $request->EMAIL && Hash::check($request->MATKHAU, $tk->MATKHAU) && $tk->LOAITK == 3) {
                // admin
                $login = $tk;
                $check = 3;
                break;
            } else if ($tk->EMAIL == $request->EMAIL && Hash::check($request->MATKHAU, $tk->MATKHAU) && $tk->LOAITK == 2) {
                // teacher
                $login = $tk;
                $check = 2;
                break;
            } else if ($tk->EMAIL == $request->EMAIL && Hash::check($request->MATKHAU, $tk->MATKHAU) && $tk->LOAITK == 4) {
                //nkd
                $login = $tk;
                $check = 4;
                break;
            }
        }
        if ($check == 3) {
            session(['login' => $login]);
            return redirect('admin/dashboard');
        } elseif ($check == 2) {
            session(['login' => $login]);
            return redirect('admin/dashboard');
        } elseif ($check == 4) {
            session(['login' => $login]);
            return redirect('admin/baithi');
        } else {
            return redirect('admin')->with('thongbao', 'Sai tên đăng nhập hoặc mật khẩu!');
        }
    }

    public function getLogout()
    {
        session()->forget('login');
        return redirect('admin/');
    }
}