<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Mail;
use Illuminate\Support\Str;

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
                if ($user['TRANGTHAI'] == 1) {
                    if (Session::has('customer')) {
                        Session::forget('customer');
                        Session::put('customer', $user);
                    } else {
                        Session::put('customer', $user);
                    }
                    return redirect()->route('home.index');
                } else {
                    return redirect()->route('login.login')->with('noActive', 'Tài khoản của bạn chưa được kích hoạt');
                }
            }
            // else {
            //     return redirect()->route('login.login')->with('wrongInfo', 'Sai tên đăng nhập hoặc mật khẩu');
            // }
        }
    }
    public function register()
    {
        return view('user.login.register');
    }
    public function confirmEmail()
    {
        return view('user.confirmEmail.index');
    }

    public function postRegister(Request $request)
    {
        $data = $request->all();
        $users = TaiKhoan::all();
        $token = Str::random(20);
        $toName = "ESTO";

        //VALIDATION
        $request->validate(
            [
                'email' => "regex:/^[\w.+\-]+@gmail\.com$/|unique:taikhoan,EMAIL",
                'password' => "min:6",
                'phonenumber' => "regex:/^0[0-9]{9,10}$/",
                're_password' => "same:password",
            ],
            [
                'email.regex' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã tồn tại',
                'phonenumber.regex' => 'Không tồn tại số điện thoại này',
                'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
                're_password.same' => "Hai mật khẩu không giống nhau",
            ]
        );

        //TAO TAI KHOAN
        $taikhoan =   TaiKhoan::create([
            'HOTEN' => $data['fullname'],
            'EMAIL' => $data['email'],
            'NGAYSINH' => $data['birthday'],
            'GIOITINH' => $data['gender'],
            'SODIENTHOAI' => $data['phonenumber'],
            'MATKHAU' => bcrypt($data['password']),
            'LOAITK' => 1,
            'TOKEN' => $token
        ]);
        $toEmail = $data['email'];
        Mail::send('user.mails.sendMail', compact('taikhoan'), function ($message) use ($taikhoan, $toEmail, $toName) {
            $message->from($toEmail, $toName);
            $message->subject('Xác thực email');
            $message->to($taikhoan->EMAIL, $taikhoan->HOTEN);
        });
        return redirect()->route('mail.confirmEmail')->with('haveActived', 'Đăng ký tài khoản thành công, vui lòng xác nhận tài khoản');
    }

    public function logout()
    {
        Session::forget('customer');
        return redirect()->route('login.login');
    }

    //KICH HOAT TAI KHOAN
    public function actived(Taikhoan $taikhoan, $token)
    {
        if ($taikhoan->TOKEN === $token) {
            $taikhoan->update(['TRANGTHAI' => 1, 'TOKEN' => null]);
            return redirect()->route('login.login')->with('haveActived', 'Xác nhận tài khoản thành công, bạn có thể đăng nhập');
        } else {
            return redirect()->route('login.login')->with('noActive', 'Mã xác nhận bạn gởi không hợp lệ');
        }
    }

    //QUEN MAT KHAU
    public function forgotPass()
    {
        return view('user.forgotPassword.index');
    }
    public function postForgotPass(Request $request)
    {
        $request->validate(
            [
                'email' => "regex:/^[\w.+\-]+@gmail\.com$/|exists:taikhoan",
            ],
            [
                'email.regex' => 'Email không đúng định dạng',
                'email.exists' => 'Email không tồn tại trong hệ thống',
            ]
        );
        $data = $request->all();
        $toEmail = $data['email'];
        $token = Str::random(20);
        $taikhoan = TaiKhoan::where('EMAIL',  $toEmail)->first();
        $taikhoan->update(['TOKEN' => $token]);
        $toName = "ESTO";

        Mail::send('user.mails.emailForgotPassword', compact('taikhoan'), function ($message) use ($taikhoan, $toEmail, $toName) {
            $message->from($toEmail, $toName);
            $message->subject('Lấy lại mật khẩu');
            $message->to($taikhoan->EMAIL, $taikhoan->HOTEN);
        });
        return redirect()->route('login.login')->with('haveActived', 'Vui lòng check email để thực hiện thay đổi');
    }

    public function getPass(Taikhoan $taikhoan, $token)
    {
        if ($taikhoan->TOKEN === $token) {
            return view('user.getPassword.index');
        }
        return abort(404);
    }

    public function postGetPass(Taikhoan $taikhoan, $token,Request $request)
    {
        $request->validate(
            [
                'password' => "min:6",
                're_password' => "same:password",
            ],
            [
                'password.min' => 'Mật khẩu phải ít nhất 6 ký tự',
                're_password.same' => "Hai mật khẩu không giống nhau",
            ]
        );
        $newPass =bcrypt($request->password) ;
        $taikhoan->update(['MATKHAU' => $newPass,'TOKEN' => null]);
        echo $newPass;
        return redirect()->route('login.login')->with('haveActived', 'Đổi mật khẩu thành công, bạn có thể đăng nhập');
    }
}
