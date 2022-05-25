<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CTHoaDon;
use App\Models\CTLopHoc;
use App\Models\KhoaHoc;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;
// use App\Charts\UserChart;
use Illuminate\Support\Facades\DB;
use App\Models\HoaDon;

class DashBoardController extends Controller
{
    public function index()
    {
        $borderColors = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColors = [
            "rgba(255, 99, 132, 0.2)",
            "rgba(22,160,133, 0.2)",
            "rgba(255, 205, 86, 0.2)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];

        if (session('login')->LOAITK == 2) {
            $khoahoc = KhoaHoc::where('MAGV', session('login')->ID)->get();
            $hocvien = CTLopHoc::join('LopHoc', 'LopHoc.MALH', 'CTLopHoc.MALH')
                ->join('KhoaHoc', 'KhoaHoc.MAKH', 'LopHoc.MAKH')
                ->where('MAGV', session('login')->ID)->get();
        } else {
            $khoahoc = KhoaHoc::all();
            $hocvien = TaiKhoan::where('LOAITK', '1')->get();
        }
        $giangvien = TaiKhoan::where('LOAITK', '2')->get();

        $data = array();
        for ($i = 1; $i <= 12; $i++) {
            $count = 0;
            $hoadon = DB::table('HoaDon')->whereMonth('NGAYHD', $i)->get();
            foreach ($hoadon as $hd) {
                if (session('login')->LOAITK == 2)
                    $cthoadon = DB::table('CTHoaDon')
                        ->join('KhoaHoc', 'KhoaHoc.MAKH', '=', 'CTHoaDon.MAKH')
                        ->where('MAGV', session('login')->ID)->where('MAHD', $hd->MAHD)->get();
                else $cthoadon = DB::table('CTHoaDon')->where('MAHD', $hd->MAHD)->get();
                foreach ($cthoadon as $cthd) {
                    $count += 1;
                }
            }
            array_push($data, $count);
        }
        // $doanhsoChart = new UserChart;
        // $doanhsoChart->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']);
        // $doanhsoChart->dataset('Users by trimester', 'bar', $data)
        // ->color($borderColors)
        // ->backgroundcolor($fillColors);
        $tongdoanhthu = 0;
        $data = array();
        for ($i = 1; $i <= 12; $i++) {
            $count = 0;
            $hoadon = DB::table('HoaDon')->whereMonth('NGAYHD', $i)->get();
            foreach ($hoadon as $hd) {
                if (session('login')->LOAITK == 2)
                    $cthoadon = DB::table('CTHoaDon')
                        ->join('KhoaHoc', 'KhoaHoc.MAKH', '=', 'CTHoaDon.MAKH')
                        ->where('MAGV', session('login')->ID)->where('MAHD', $hd->MAHD)->get();
                else
                    $cthoadon = DB::table('CTHoaDon')
                        ->join('KhoaHoc', 'KhoaHoc.MAKH', '=', 'CTHoaDon.MAKH')
                        ->where('MAHD', $hd->MAHD)->get();
                foreach ($cthoadon as $cthd) {
                    $count += $cthd->DONGIA;
                    $tongdoanhthu += $cthd->DONGIA;
                }
            }
            array_push($data, $count);
        }
        // $doanhthuChart = new UserChart;
        // $doanhthuChart->labels(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']);
        // $doanhthuChart->dataset('Users by trimester', 'line', $data)
        //     ->color("rgb(255, 99, 132)")
        //     ->backgroundcolor("rgb(255, 99, 132)");
        $courses = DB::table('hoadon')
        ->join('cthoadon','hoadon.MAHD', '=', 'cthoadon.MAHD')
        ->select(DB::raw('DATE_FORMAT(hoadon.NGAYHD,"%d/%m/%Y") order_day, COUNT(DISTINCT(cthoadon.MAKH)) total_course'))
        ->groupBy('order_day')->get()->toArray();
        return view('admin.dashboard.index', compact('khoahoc', 'hocvien', 'giangvien', 'tongdoanhthu', 'courses'));
    }

    public function reportRevenue(Request $request)
    {
        $revenues = DB::table('hoadon')->whereBetween('NGAYHD', [$request->start_date, $request->end_date])
        ->join('cthoadon','hoadon.MAHD', '=', 'cthoadon.MAHD')
        ->join('khoahoc','cthoadon.MAKH','=','khoahoc.MAKH')
        ->select(DB::raw('DATE_FORMAT(hoadon.NGAYHD,"%d/%m/%Y") order_day, SUM(khoahoc.DONGIA) total_price'))
        ->groupBy('order_day')->get()->toArray();
        return redirect()->route('admin.dashboard.index')->with('revenues',$revenues);
    }
}
