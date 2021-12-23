<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use App\Models\BaiThi;
use App\Models\CauHoi;
use App\Models\CTBaiThi;
use App\Models\DanhMuc;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaiThiController extends Controller
{
    public function index($id = 0)
    {
        DB::table('CTBaiThi')->whereNull('MABT')->delete();
        if ($id == 0) {
            $baithi = BaiThi::whereNull('TGBD')->orderBy('MABT', 'desc')->paginate(10);
            return view('admin.baithi.index', ['baithi' => $baithi], ['id' => $id]);
        } else {
            $baithi = BaiThi::whereNotNull('TGBD')->orderBy('MABT', 'desc')->paginate(10);
            return view('admin.baithi.index', ['baithi' => $baithi], ['id' => $id]);
        }
    }

    public function create($id)
    {
        $khoahoc = KhoaHoc::where('TRUCTUYEN', '0')->get();
        $cauhoi = DB::table('CTBaiThi')
            ->join('CauHoi', 'CTBaiThi.MACH', '=', 'CauHoi.MACH')
            ->whereNull('MABT')->get();
        return view('admin.baithi.create', compact('khoahoc', 'id', 'cauhoi'));
    }

    public function hinhthuc(Request $request)
    {
        $output = "tructuyen";
        $khoahoc = KhoaHoc::find($request->key);
        if ($khoahoc->TRUCTUYEN == false) {
            $baihoc = DB::table('BaiHoc')
                ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('KhoaHoc.MAKH', $khoahoc->MAKH)->get();
            if (count($baihoc) > 0) {
                $output = '<div class="form-group">
            <label class="form-control-label" for="input-first-name">Bài học</label></br>
            <select name="MABH">';
                foreach ($baihoc as $bh) {
                    $output .= '<option value="' . $bh->MABH . '">' . $bh->TENBH . '</option>';
                }
                $output .= '</select>
            </div>';
            } else $output = "video";
        }
        return response()->json($output);
    }

    public function store(Request $request, $id)
    {
        $MAKH = $request->MAKHbaithi;
        $khoahoc = KhoaHoc::find($MAKH);
        $baithi = new BaiThi();
        $baithi->TENBT = $request->TENBT;
        $baithi->MAGV = $khoahoc->MAGV;
        if ($khoahoc->TRUCTUYEN == true) {
            $baithi->TGBD = $request->TGBD;
            $baithi->TGKT = $request->TGKT;
            $baithi->save();
        } else {
            $baithi->save();
            DB::table('BaiHoc')
                ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('KhoaHoc.MAKH', $khoahoc->MAKH)
                ->update(['MABT' => $baithi->MABT]);
        }

        return redirect('admin/baithi/them')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $khoahoc = KhoaHoc::all();
        $baithi = BaiThi::find($id);
        $baihoc = DB::table('BaiHoc')
            ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
            ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
            ->where('MABT', $id)->get();
        return view('admin.baithi.edit', compact('khoahoc', 'baithi', 'baihoc'));
    }

    public function createCauHoi($id)
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', '0')->get();
        return view('admin.cauhoi.create', compact('danhmuc', 'id'));
    }

    public function storeCauHoi(Request $request, $id)
    {
        $cauhoi = new CauHoi();
        $cauhoi->NOIDUNG = $request->NOIDUNG;
        $cauhoi->A = $request->A;
        $cauhoi->B = $request->B;
        $cauhoi->C = $request->C;
        $cauhoi->D = $request->D;
        $cauhoi->CAUDUNG = $request->CAUDUNG;
        $cauhoi->MADM = $request->MADM;
        $cauhoi->save();

        $ctbaithi = new CTBaiThi();
        $ctbaithi->MACH = $cauhoi->MACH;
        $ctbaithi->save();

        return redirect('admin/baithi/them/' . $id)->with('thongbao', 'Thêm câu hỏi thành công!');
    }

    public function update(Request $request, $id)
    {
    }

    public function delete($id)
    {
        $baithi = BaiThi::find($id);
        $baithi->delete();

        return redirect('admin/baithi/')->with('thongbao', 'Xóa thành công!');
    }
}
