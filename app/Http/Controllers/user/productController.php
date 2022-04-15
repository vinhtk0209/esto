<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\BaiLam;
use App\Models\BaiThi;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use App\Models\LopHoc_BaiHoc;
use App\Models\CTBaiLam;
use App\Models\HoaDon;
use App\Models\LopHoc;

class productController extends Controller
{
    public function detailProduct($productId)
    {
        $countStudent = DB::table('cthoadon')->where('cthoadon.MAKH', $productId)->count();
        $countRate = DB::table('danhgia')->where('danhgia.MAKH', $productId)->count();

        $cateCourse = DB::table('danhmuc')
            ->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        $productDetail  = DB::table('khoahoc')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('khoahoc.MAKH',  $productId)->get();

        $sectionCourse  = DB::table('chuonghoc')
            ->where('chuonghoc.MAKH', '=', $productId)->get();
        $lessonCourse = DB::table('baihoc')->get();

        $sectionCourse  = DB::table('chuonghoc')->where('chuonghoc.MAKH', '=', $productId)->get();
        $lessonCourse = DB::table('baihoc')->get();




        foreach ($productDetail as $value) {
            $courseCate = $value->MADM;
            $courseOnline = $value->TRUCTUYEN;
        }
        if ($courseOnline != 0) {
            $classRoom = DB::table('lophoc')->where('lophoc.MAKH', '=', $productId)->get();
        } else {
            $classRoom = "";
        }

        $relatedCourse  = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->where('danhmuc.MADM', $courseCate)
            ->whereNotIn('khoahoc.MAKH', [$productId])->get();

        return view('/user/courseDetail/index')->with('category', $cateCourse)->with('productDetail', $productDetail)->with('relatedCourse', $relatedCourse)->with('sectionCourse', $sectionCourse)->with('lessonCourse', $lessonCourse)->with('countStudent', $countStudent)->with('countRate', $countRate)->with('courseOnline', $courseOnline)->with('classRoom', $classRoom);
    }

    public function listCourse($courseCate)
    {
        $minPrice = KhoaHoc::min('DONGIA');
        $maxPrice = KhoaHoc::max('DONGIA');

        if (isset($_GET['sortBy'])) {
            $sortBy = $_GET['sortBy'];
            if ($sortBy == 'giamdan') {
                $cateById = KhoaHoc::with('rDanhMuc')
                    ->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')
                    ->where('khoahoc.MADM', '=', $courseCate)
                    ->orWhere('danhmuc.MADMCHA', '=', $courseCate)
                    ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
                    ->orderby('DONGIA', 'DESC')
                    ->paginate(12)
                    ->appends(request()->query());
            } elseif ($sortBy == 'tangdan') {
                $cateById = KhoaHoc::with('rDanhMuc')
                    ->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')
                    ->where('khoahoc.MADM', '=', $courseCate)->orWhere('danhmuc.MADMCHA', '=', $courseCate)
                    ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
                    ->orderby('DONGIA', 'ASC')
                    ->paginate(12)
                    ->appends(request()->query());
            } elseif ($sortBy == 'za') {
                $cateById = KhoaHoc::with('rDanhMuc')
                    ->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')
                    ->where('khoahoc.MADM', '=', $courseCate)
                    ->orWhere('danhmuc.MADMCHA', '=', $courseCate)
                    ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
                    ->orderby('TENKH', 'DESC')
                    ->paginate(12)
                    ->appends(request()->query());
            } elseif ($sortBy == 'az') {
                $cateById = KhoaHoc::with('rDanhMuc')
                    ->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')
                    ->where('khoahoc.MADM', '=', $courseCate)
                    ->orWhere('danhmuc.MADMCHA', '=', $courseCate)
                    ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
                    ->orderby('TENKH', 'ASC')
                    ->paginate(12)
                    ->appends(request()->query());
            }
        } elseif (isset($_GET['filtePrice']) && isset($_GET['endPrice'])) {
            $minPrice = $_GET['startPrice'];
            $maxPrice = $_GET['endPrice'];
            $cateById = KhoaHoc::with('rDanhMuc')
                ->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')
                ->where('khoahoc.MADM', '=', $courseCate)
                ->orWhere('danhmuc.MADMCHA', '=', $courseCate)
                ->whereBetween('DONGIA', [$minPrice, $maxPrice])
                ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
                ->orderby('DONGIA', 'ASC')
                ->paginate(12)
                ->appends(request()->query());
        } else {
            $cateById = DB::table('khoahoc')->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')->where('khoahoc.MADM', '=', $courseCate)->orWhere('danhmuc.MADMCHA', '=', $courseCate)->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->paginate(12);
        }
        $cateName = DB::table('danhmuc')->where('danhmuc.MADM', $courseCate)->get();

        $listCate = DB::table('danhmuc')->where('danhmuc.MADMCHA', $courseCate)->get();

        return view('user.listCourse.index')
            ->with('cateById', $cateById)
            ->with('cateName', $cateName)
            ->with('listCate', $listCate)
            ->with('minPrice', $minPrice)
            ->with('maxPrice', $maxPrice);
    }

    public function addToCart(Request $request)
    {
        $product = KhoaHoc::find($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if (!is_null($oldCart)) {
            $ids = array_keys($oldCart->items);
            if (in_array($request->id, $ids)) {
                return response()->json([
                    'status' => 403
                ]);
            }
        }
        $cart = new Cart($oldCart);
        $cart->add($product, $product->MAKH);
        $request->session()->put('cart', $cart);
        return response()->json([
            'status' => 200,
            'qty'    => Session::get('cart')->totalQty,
            'price'  => Session::get('cart')->totalPrice
        ]);
    }

    public function getCart()
    {
        return view('user.cart.index');
    }

    public function deleteItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deleteItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function handleExam(Request $request)
    {
        $exam = BaiThi::find($request->code);
        if (!Session::has('customer')) {
            return redirect()->back()->with('noLogin', 'Vui lòng đăng nhập để tiếp tục  ');
        }
        if (!$exam) {
            return redirect()->route('home.index')->with('noTest', 'Không tồn tại bài thi này');
        }
        $today = date("Y-m-d h:i:sa");
        $timeStart = $exam->TGBD;
        $timeFinish = $exam->TGKT;
        if (strtotime($today) <  strtotime($timeStart)) {
            return redirect()->route('home.index')->with('noTest', 'Chưa tới giờ làm bài');
        }
        if (strtotime($today) >  strtotime($timeFinish))
            return redirect()->route('home.index')->with('noTest', 'Đã hết giờ làm bài');
        $bailam = BaiLam::where('MAHV', Session::get('customer')->ID)
            ->where('MABT', $request->code)->get();
        if (count($bailam) != 0)
            return redirect()->route('home.index')->with('noTest', 'Bạn đã làm bài thi này');
        return redirect('exam/' . $request->code);
    }

    public function exam($id)
    {
        $ctbailam = new CTBaiLam();
        $bailam = BaiLam::where('MAHV', Session::get('customer')->ID)
            ->where('MABT', $id)->get();
        if (count($bailam) == 0) {
            $bailam = new BaiLam();
            $bailam->MAHV = Session::has('customer') ? Session::get('customer')->ID : null;
            $bailam->MABT = $id;
            $bailam->ACTIVE = false;
            $bailam->save();
            Session::put('takeExam', $bailam->MABL);
        }
        else Session::put('takeExam', $bailam[0]->MABL);
        $baithi = DB::table('CTBaithi')
            ->join('BaiThi', 'CTBaithi.MABT', '=', 'BaiThi.MABT')
            ->join('CauHoi', 'CauHoi.MACH', '=', 'CTBaiThi.MACH')
            ->where('CTBaithi.MABT', $id)->paginate(1);
        return view('user.exam.take', compact('baithi', 'ctbailam'));
    }

    function fetch_data(Request $request, $id)
    {
        $ctbailam = new CTBaiLam();
        if ($request->ajax()) {
            $baithi = DB::table('CTBaithi')
                ->join('BaiThi', 'CTBaithi.MABT', '=', 'BaiThi.MABT')
                ->join('CauHoi', 'CauHoi.MACH', '=', 'CTBaiThi.MACH')
                ->where('CTBaithi.MABT', $id)->paginate(1);
            return view('user.exam.question', compact('baithi', 'ctbailam'))->render();
        }
    }

    function saveAnswer(Request $request)
    {
        if (Session::has('takeExam')) {
            $ctbailam = CTBaiLam::where('MABL', Session::get('takeExam'))
                ->where('MACH', $request->mach)
                ->update(['DAPAN' => $request->dapan]);
            if ($ctbailam == 0) {
                $ctbailam = new CTBaiLam();
                $ctbailam->MABL = Session::has('takeExam') ? Session::get('takeExam') : null;
                $ctbailam->MACH = $request->mach;
                $ctbailam->DAPAN = $request->dapan;
                $ctbailam->save();
            }
        }

        if ($request->ajax()) {
            $baithi = DB::table('CTBaithi')
                ->join('BaiThi', 'CTBaithi.MABT', '=', 'BaiThi.MABT')
                ->join('CauHoi', 'CauHoi.MACH', '=', 'CTBaiThi.MACH')
                ->where('CTBaithi.MABT', $request->id)->paginate(1);
            return "success";
        }
    }

    public function contentClass($id)
    {
        $classId = DB::table('lophoc')->where('MALH', $id)->get();
        $productId = $classId[0]->MAKH;
        $countStudent = DB::table('cthoadon')->where('cthoadon.MAKH', $productId)->count();
        $countRate = DB::table('danhgia')->where('danhgia.MAKH', $productId)->count();

        $cateCourse = DB::table('danhmuc')
            ->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        $productDetail  = DB::table('khoahoc')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('khoahoc.MAKH',  $productId)->get();

        $sectionCourse  = DB::table('chuonghoc')
            ->where('chuonghoc.MAKH', '=', $productId)->get();
        $lessonCourse = DB::table('baihoc')
            ->join('lophoc_baihoc', 'lophoc_baihoc.MABH', '=', 'baihoc.MABH')
            ->join('lophoc', 'lophoc.MALH', '=', 'lophoc_baihoc.MALH')
            ->where('lophoc.MALH', $id)
            ->get();

        foreach ($productDetail as $value) {
            $courseCate = $value->MADM;
            $courseOnline = $value->TRUCTUYEN;
        }
        if ($courseOnline != 0) {
            $classRoom = DB::table('lophoc')->where('lophoc.MAKH', '=', $productId)->get();
        } else {
            $classRoom = "";
        }

        $relatedCourse  = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->where('danhmuc.MADM', $courseCate)
            ->whereNotIn('khoahoc.MAKH', [$productId])->get();

        return view('user.courseDetail.contentClass')
            ->with('category', $cateCourse)
            ->with('productDetail', $productDetail)
            ->with('relatedCourse', $relatedCourse)
            ->with('sectionCourse', $sectionCourse)
            ->with('lessonCourse', $lessonCourse)
            ->with('countStudent', $countStudent)
            ->with('countRate', $countRate)
            ->with('courseOnline', $courseOnline)
            ->with('classRoom', $classRoom);
    }

    public function contentClassBought($id)
    {
        $classMyCourse = [];
        $classId = DB::table('lophoc')->where('MALH', $id)->get();
        $productId = $classId[0]->MAKH;
        $countStudent = DB::table('cthoadon')->where('cthoadon.MAKH', $productId)->count();
        $countRate = DB::table('danhgia')->where('danhgia.MAKH', $productId)->count();

        $cateCourse = DB::table('danhmuc')
            ->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        $productDetail  = DB::table('khoahoc')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('khoahoc.MAKH',  $productId)->get();

        $sectionCourse  = DB::table('chuonghoc')
            ->where('chuonghoc.MAKH', '=', $productId)->get();
        $lessonCourse = DB::table('baihoc')
            ->join('lophoc_baihoc', 'lophoc_baihoc.MABH', '=', 'baihoc.MABH')
            ->join('lophoc', 'lophoc.MALH', '=', 'lophoc_baihoc.MALH')
            ->where('lophoc.MALH', $id)
            ->get();

        foreach ($productDetail as $value) {
            $courseCate = $value->MADM;
            $courseOnline = $value->TRUCTUYEN;
        }
        if ($courseOnline != 0) {
            $classRoom = DB::table('lophoc')->where('lophoc.MAKH', '=', $productId)->get();
        } else {
            $classRoom = "";
        }

        $relatedCourse  = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')
            ->join('danhmuc', 'danhmuc.MADM', '=', 'khoahoc.MADM')
            ->where('danhmuc.MADM', $courseCate)
            ->whereNotIn('khoahoc.MAKH', [$productId])->get();

        //CLASS BOUGHT
        $bills = HoaDon::join('cthoadon', 'hoadon.MAHD', '=', 'cthoadon.MAHD')
            ->where('hoadon.MAHV', Session::get('customer')->ID)
            ->select('*')->get();
        foreach ($bills as $bill) {
            $classMyCourse[] = LopHoc::all();
        }



        return view('user.infoManager.contentClassBought')
            ->with('category', $cateCourse)
            ->with('productDetail', $productDetail)
            ->with('relatedCourse', $relatedCourse)
            ->with('sectionCourse', $sectionCourse)
            ->with('lessonCourse', $lessonCourse)
            ->with('countStudent', $countStudent)
            ->with('countRate', $countRate)
            ->with('courseOnline', $courseOnline)
            ->with('classRoom', $classRoom)
            ->with('bill', $bills);
    }
}
