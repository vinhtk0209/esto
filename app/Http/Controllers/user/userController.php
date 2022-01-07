<?php

namespace App\Http\Controllers\user;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\HoaDon;
use App\Models\BaiThi;
use App\Models\KhoaHoc;
use App\Models\KhoaHoc_BaiHoc;
// use App\Http\Controllers\user\DB;
use App\Models\LopHoc;
use Exception;

class userController extends Controller
{
    public function showFormUpdateProfile()
    {
        if (Session::has('customer')) {
            $user = TaiKhoan::find(Session::get('customer')->ID);
            return view('user.infoManager.infoFile', compact('user'));
        } else {
            return redirect()->route('home.index');
        }
    }

    public function updateProfile($id, Request $request)
    {
        $request->validate(
            [
                'avaUser' => 'image|max:5120',
                'phonenumber' => "regex:/^0[0-9]{9,10}$/",
            ],
            [
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
            if (Session::has('customer')) {
                Session::forget('customer');
                Session::put('customer', $user);
            } else {
                Session::put('customer', $user);
            }
            return redirect()->route('update.profile')
                ->with('updateSuccess', "Cập nhật thành công");
        } catch (Exception $err) {
        }


        return redirect()->route('update.profile');
    }

    public function showMyCourse()
    {
        $listMyCourse = [];
        $classMyCourse = [];
        if (Session::has('customer')) {
            $bills = HoaDon::join('cthoadon', 'hoadon.MAHD', '=', 'cthoadon.MAHD')
                ->where('hoadon.MAHV', Session::get('customer')->ID)
                ->select('*')->get();
            foreach ($bills as $bill) {
                $listMyCourse[] = KhoaHoc::join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->find($bill->MAKH);
                $classMyCourse[] = Lophoc::all();
            }
            return view('user.infoManager.myCourse', compact('listMyCourse', 'classMyCourse', 'bills'));
        } else {
            return redirect()->route('home.index');
        }
    }

    public function learnCourse($id)
    {
        if (Session::has('customer')) {
            $user = TaiKhoan::find(Session::get('customer')->ID);
            $exam = BaiThi::all();
            $bills = HoaDon::join('cthoadon', 'hoadon.MAHD', '=', 'cthoadon.MAHD')
                ->where('hoadon.MAHV', Session::get('customer')->ID)
                ->first();
            if ($bills) {
                $data = [];
                $course_lessons = KhoaHoc_BaiHoc::where('MAKH', $id)->get();
                foreach ($course_lessons as $course_lesson) {
                    $lesson = BaiHoc::find($course_lesson->MABH);
                    $data[$lesson->MACHUONG][] = $lesson;
                }
                $course_lesson_first  = KhoaHoc_BaiHoc::where('MAKH', $id)->first();
                return view('user.lesson.index', compact('course_lesson_first', 'course_lessons', 'data', 'exam'));
            } else {
                $countStudent = DB::table('cthoadon')->where('cthoadon.MAKH', $id)->count();
                $countRate = DB::table('danhgia')->where('danhgia.MAKH', $id)->count();
                $cateCourse = DB::table('danhmuc')
                    ->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
                $productDetail  = DB::table('khoahoc')
                    ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
                    ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('khoahoc.MAKH',  $id)->get();
                $sectionCourse  = DB::table('chuonghoc')
                    ->where('chuonghoc.MAKH', '=', $id)->get();
                $lessonCourse = DB::table('baihoc')->get();
                $sectionCourse  = DB::table('chuonghoc')->where('chuonghoc.MAKH', '=', $id)->get();
                $lessonCourse = DB::table('baihoc')->get();
                foreach ($productDetail as $value) {
                    $courseCate = $value->MADM;
                    $courseOnline = $value->TRUCTUYEN;
                }
                if ($courseOnline != 0) {
                    $classRoom = DB::table('lophoc')->where('lophoc.MAKH', '=', $id)->get();
                } else {
                    $classRoom = "";
                }
                $relatedCourse  = DB::table('khoahoc')
                    ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
                    ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
                    ->where('danhmuc.MADM', $courseCate)
                    ->whereNotIn('khoahoc.MAKH', [$id])->get();
                return view('/user/courseDetail/index')->with('category', $cateCourse)->with('productDetail', $productDetail)->with('relatedCourse', $relatedCourse)->with('sectionCourse', $sectionCourse)->with('lessonCourse', $lessonCourse)->with('countStudent', $countStudent)->with('countRate', $countRate)->with('courseOnline', $courseOnline)->with('classRoom', $classRoom);
            }
        } else {
            return redirect()->route('home.index');
        }
    }

    public function ajaxLoadVideo(Request $request)
    {
        $lesson_first = BaiHoc::find($request->lesson_id);
        return response()->json([
            'status' => 200,
            'data' => view('user.lesson.video', compact('lesson_first'))->render()
        ]);
    }
}