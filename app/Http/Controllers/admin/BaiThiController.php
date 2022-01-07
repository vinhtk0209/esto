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
            if (session('login')->LOAITK == 2)
                $baithi = BaiThi::whereNull('TGBD')
                    ->join('TaiKhoan', 'TaiKhoan.ID', 'BaiThi.MAGV')
                    ->where('BaiThi.MAGV', session('login')->ID)
                    ->orderBy('MABT', 'desc')->paginate(10);
            else
                $baithi = BaiThi::whereNull('TGBD')
                    ->orderBy('MABT', 'desc')->paginate(10);
        } else {
            if (session('login')->LOAITK == 2)
                $baithi = BaiThi::whereNotNull('TGBD')
                    ->join('TaiKhoan', 'TaiKhoan.ID', 'BaiThi.MAGV')
                    ->where('BaiThi.MAGV', session('login')->ID)
                    ->orderBy('MABT', 'desc')->paginate(10);
            else
                $baithi = BaiThi::whereNotNull('TGBD')->orderBy('MABT', 'desc')->paginate(10);
        }
        return view('admin.baithi.index', ['baithi' => $baithi], ['id' => $id]);
    }

    public function create($id)
    {
        if (session('login')->LOAITK == 2)
            $khoahoc = KhoaHoc::where('TRUCTUYEN', '0')
                ->where('MAGV', session('login')->ID)->get();
        else
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

    public function monhoc(Request $request)
    {
        $output = "none";
        if ($request->key < 0) $cauhoi = CauHoi::all();
        else $cauhoi = CauHoi::where('MADM', $request->key)->get();
        foreach ($cauhoi as $ch) {
            $output .= '<tr>
            <td class="budget">
                <input type="checkbox" name="ids[]" value="' . $ch->MACH . '">
            </td>
            <td class="budget">
                ' . $ch->NOIDUNG . '
            </td>
            <td class="budget">
                ' . $ch->A . '
            </td>
            <td class="budget">
                ' . $ch->B . '
            </td>
            <td class="budget">
                ' . $ch->C . '
            </td>
            <td class="budget">
                ' . $ch->D . '
            </td>
            <td class="budget">
                ' . $ch->CAUDUNG . '
            </td>
            <td class="budget">
                ' . $ch->rDanhMuc->TENDM . '
            </td>
        </tr>';
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

        DB::table('CTBaiThi')->whereNull('MABT')->update(['MABT' => $baithi->MABT]);

        return redirect('admin/baithi/them/' . $id)->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        if (session('login')->LOAITK == 2)
            $khoahoc = KhoaHoc::where('MAGV', session('login')->ID)->get();
        else
            $khoahoc = KhoaHoc::all();
        $baithi = BaiThi::find($id);
        $baihoc = DB::table('BaiHoc')
            ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
            ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
            ->where('MABT', $id)->get();
        $cauhoi = DB::table('CTBaiThi')
            ->join('CauHoi', 'CTBaiThi.MACH', '=', 'CauHoi.MACH')
            ->whereNull('MABT')
            ->orwhere('MABT', $baithi->MABT)->get();
        return view('admin.baithi.edit', compact('khoahoc', 'cauhoi', 'baithi', 'baihoc', 'id'));
    }

    public function update(Request $request, $id)
    {
        $MAKH = $request->MAKHbaithi;
        $khoahoc = KhoaHoc::find($MAKH);
        $baithi = BaiThi::find($id);
        $baithi->TENBT = $request->TENBT;
        if ($id >= 0) {
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

        DB::table('CTBaiThi')->whereNull('MABT')->update(['MABT' => $baithi->MABT]);

        return redirect('admin/baithi/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $baithi = BaiThi::find($id);
        $baithi->delete();

        return redirect('admin/baithi/')->with('thongbao', 'Xóa thành công!');
    }

    public function indexCauHoi($id)
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', '0')->get();
        $cauhoi = CauHoi::all();
        return view('admin.cauhoi.index', compact('danhmuc', 'cauhoi', 'id'));
    }

    public function indexPostCauHoi(Request $request, $id)
    {
        $dsch = $request->get('ids');
        foreach ($dsch as $ch) {
            $ctbaithi = new CTBaiThi();
            $ctbaithi->MACH = $ch;
            $ctbaithi->save();
        }

        if ($id < 0) return redirect('admin/baithi/them/' . $id)->with('thongbao', 'Thêm câu hỏi thành công!');
        return redirect('admin/baithi/sua/' . $id)->with('thongbao', 'Thêm câu hỏi thành công!');
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
        $ctbaithi->DIEM = $request->DIEM;
        $ctbaithi->save();

        if ($id < 0) return redirect('admin/baithi/them/' . $id)->with('thongbao', 'Thêm câu hỏi thành công!');
        return redirect('admin/baithi/sua/' . $id)->with('thongbao', 'Thêm câu hỏi thành công!');
    }

    public function editCauHoi($id, $mach)
    {
        $danhmuc = DanhMuc::where('MADMCHA', '>', '0')->get();
        $cauhoi = CauHoi::find($mach);
        return view('admin.cauhoi.edit', compact('danhmuc', 'cauhoi', 'id', 'mach'));
    }

    public function updateCauHoi(Request $request, $id, $mach)
    {
        $cauhoi = CauHoi::find($mach);
        $cauhoi->NOIDUNG = $request->NOIDUNG;
        $cauhoi->A = $request->A;
        $cauhoi->B = $request->B;
        $cauhoi->C = $request->C;
        $cauhoi->D = $request->D;
        $cauhoi->CAUDUNG = $request->CAUDUNG;
        $cauhoi->MADM = $request->MADM;
        $cauhoi->save();

        DB::table('CTBaiThi')->whereNull('MABT')->where('MACH', $mach)->update(['DIEM' => $request->DIEM]);

        return redirect('admin/baithi/them/' . $id . '/cauhoi/sua/' . $mach)->with('thongbao', 'Sửa câu hỏi thành công!');
    }

    public function deleteCauHoi($id, $mach)
    {
        if ($id < 0)
            DB::table('CTBaiThi')->whereNull('MABT')->where('MACH', $mach)->delete();
        else DB::table('CTBaiThi')->where('MABT', $id)->where('MACH', $mach)->delete();

        if ($id < 0) return redirect('admin/baithi/them/' . $id)->with('thongbao', 'Xóa câu hỏi thành công!');
        return redirect('admin/baithi/sua/' . $id)->with('thongbao', 'Xóa câu hỏi thành công!');
    }

    public function search(Request $request)
    {
        $outputCH = 'none';
        $outputPage = 'all';
        if (empty($request->keyword)) $cauhoi = DB::table('CauHoi')
            ->join('DanhMuc', 'DanhMuc.MADM', '=', 'CauHoi.MADM')->get();
        else {
            $cauhoi = DB::table('CauHoi')
                ->join('DanhMuc', 'DanhMuc.MADM', '=', 'CauHoi.MADM')
                ->where('NOIDUNG', 'LIKE', '%' . $request->keyword . '%')->get();
            $outputPage = 'none';
        }
        foreach ($cauhoi as $ch) {
            $outputCH .= '<tr>
            <td class="budget">
                <input type="checkbox" name="ids[]" value="' . $ch->MACH . '">
            </td>
            <td class="budget">
                ' . $ch->NOIDUNG . '
            </td>
            <td class="budget">
                ' . $ch->A . '
            </td>
            <td class="budget">
                ' . $ch->B . '
            </td>
            <td class="budget">
                ' . $ch->C . '
            </td>
            <td class="budget">
                ' . $ch->D . '
            </td>
            <td class="budget">
                ' . $ch->CAUDUNG . '
            </td>
            <td class="budget">
                ' . $ch->TENDM . '
            </td>
        </tr>';
        }
        $outputCH = mb_convert_encoding($outputCH, "UTF-8", "auto");
        $output = array($outputCH, $outputPage);
        return response()->json($output);
    }
}
