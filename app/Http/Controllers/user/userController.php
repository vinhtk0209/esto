<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\Session;
use App\Models\HoaDon;
use App\Models\KhoaHoc;

class userController extends Controller
{
    public function showFormUpdateProfile()
    {
        $user = TaiKhoan::find(Session::get('customer')->ID);
        return view('user.updateProfile.index', compact('user'));
    }

    public function updateProfile($id, Request $request)
    {
        $data = $request->all();
        $user = TaiKhoan::find($id);
        $user->HOTEN = $data['fullname'];
        $user->SODIENTHOAI = $data['phonenumber'];
        $user->save();
        if (Session::has('customer')) {
            Session::forget('customer');
            Session::put('customer', $user);
        } else {
            Session::put('customer', $user);
        }
        return redirect()->route('home.index');
    }

    public function showMyCourse()
    {
        $listMyCourse = [];
        $bills = HoaDon::join('cthoadon','hoadon.MAHD','=','cthoadon.MAHD')
        ->where('hoadon.MAHV',Session::get('customer')->ID)
        ->select('MAKH')->get();
        foreach ($bills as $bill) {
            $listMyCourse[] = KhoaHoc::find($bill->MAKH);
        }
        return view('user.mycourse.index',compact('listMyCourse'));
    }
}
