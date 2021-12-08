<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function login()
    {
        return view('user.login.login');
    }
    public function postLogin(Request $request)
    {
        $data = $request->all();
        $users = TaiKhoan::all();
        foreach ($users as $user) {
            if ($user['EMAIL'] == $data['email'] && Hash::check($data['pass'], $user['MATKHAU'])) {
                if(Session::has('customer')){
                    Session::forget('customer');
                    Session::put('customer', $user);
                }else{
                    Session::put('customer', $user);
                }
            }
        }
        return redirect()->route('home.index');
    }
    public function register()
    {
        return view('user.login.register');
    }
    public function postRegister(Request $request)
    {
        $data = $request->all();
        if ($data['password'] == $data['re_password']) {
            TaiKhoan::create([
                'HOTEN' => $data['fullname'],
                'EMAIL' => $data['email'],
                'NGAYSINH' => $data['birthday'],
                'GIOITINH' => $data['gender'],
                'SODIENTHOAI' => $data['phonenumber'],
                'MATKHAU' => bcrypt($data['password']),
                'MALOAI' => 1
            ]);
            return redirect()->route('login.login');
        } else {
            return redirect()->back();
        }
    }
    public function logout()
    {
        Session::forget('customer');
        return redirect()->route('login.login');
    }
}