<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use App\Models\ChuongHoc;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\HoaDon;
use App\Models\KhoaHoc;
use App\Models\KhoaHoc_BaiHoc;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function showFormUpdateProfile()
    {
        $user = TaiKhoan::find(Session::get('customer')->ID);
        // LIST COURSE
        $listMyCourse = [];
        $bills = HoaDon::join('cthoadon', 'hoadon.MAHD', '=', 'cthoadon.MAHD')
            ->where('hoadon.MAHV', Session::get('customer')->ID)
            ->select('cthoadon.MAKH')->get();
        foreach ($bills as $bill) {
            $listMyCourse[] = KhoaHoc::join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->find($bill->MAKH);
        }
        return view('user.infoManager.infoFile', compact('user', 'listMyCourse'));
    }

    public function updateProfile($id, Request $request)
    {
        $request->validate(
            [
                'avaUser' => 'required|image|max:5120',
                'phonenumber' => "regex:/^0[0-9]{9,10}$/",
            ],
            [
                'avaUser.require' => "Không được để trống",
                'avaUser.image' => "Phải là ảnh",
                'avaUser.max' => "Kích thước ảnh nhỏ hơn 5MB",
                'phonenumber.regex' => 'Không tồn tại số điện thoại này',
            ]
        );
        try {
            $data = $request->all();
            $user = TaiKhoan::find($id);
            $user->HOTEN = $data['fullname'];
            $user->GIOITINH = $data['gender'];
            $user->NGAYSINH = $data['birthday'];
            $user->SODIENTHOAI = $data['phonenumber'];

            if ($request->hasFile('avaUser')) {
                $file = $request->file('avaUser');
                $name = $file->getClientOriginalName();
                $hinh = Str::random(4) . "_" . $name;
                while (file_exists("./user/assets/imgAva/" . $hinh)) {
                    $hinh = Str::random(4) . "_" . $name;
                }
                $file->move("./user/assets/imgAva/", $hinh);
                $user->ANHDAIDIEN    = $hinh;
            } else {
                $user->ANHDAIDIEN = "";
            }
            $user->save();

            return redirect()->route('update.profile')
                ->with('updateSuccess', "Cập nhật thành công");
        } catch (Exception $err) {
        }

        // LIST COURSE
        $bills = HoaDon::join('cthoadon', 'hoadon.MAHD', '=', 'cthoadon.MAHD')
            ->where('hoadon.MAHV', Session::get('customer')->ID)
            ->select('cthoadon.MAKH')->get();
        foreach ($bills as $bill) {
            $listMyCourse[] = KhoaHoc::join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->find($bill->MAKH);
        }
        if (Session::has('customer')) {
            Session::forget('customer');
            Session::put('customer', $user);
        } else {
            Session::put('customer', $user);
        }
        return redirect()->route('update.profile');
    }

    public function showMyCourse()
    {
        $user = TaiKhoan::find(Session::get('customer')->ID);
        $listMyCourse = [];
        $bills = HoaDon::join('cthoadon', 'hoadon.MAHD', '=', 'cthoadon.MAHD')
            ->where('hoadon.MAHV', Session::get('customer')->ID)
            ->select('cthoadon.MAKH')->get();
        foreach ($bills as $bill) {
            $listMyCourse[] = KhoaHoc::join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->find($bill->MAKH);
        }
        return view('user.infoManager.myCourse', compact('listMyCourse'));
    }

    public function learnCourse($id)
    {
        $sectionCourse  = ChuongHoc::where('chuonghoc.MAKH', '=', $id)->get();
        $lessonCourse = BaiHoc::get();
        $course_lessons = KhoaHoc_BaiHoc::where('MAKH', $id)->get();
        $course_lesson_first  = KhoaHoc_BaiHoc::where('MAKH', $id)->first();
        return view('user.lesson.index', compact('course_lesson_first', 'course_lessons', 'sectionCourse'));
    }
}