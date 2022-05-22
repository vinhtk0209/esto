<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BaiHoc;
use App\Models\BaiLam;
use App\Models\BaiThi;
use App\Models\CauHoi;
use App\Models\CTBaiThi;
use App\Models\DanhMuc;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
        session(['mabt' => null]);
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

        $baihoc = $baithi = null;
        if (session('mabt') != null) {
            $baihoc = DB::table('BaiHoc')
                ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('MABT', session('mabt'))->get();
            $baithi = BaiThi::find(session('mabt'));
            // dd(session('mabt'));
        }
        return view('admin.baithi.create', compact('khoahoc', 'id', 'cauhoi', 'baihoc', 'baithi'));
    }

    public function createChiTiet($id)
    {
        if (session('login')->LOAITK == 2)
            $khoahoc = KhoaHoc::where('TRUCTUYEN', '0')
                ->where('MAGV', session('login')->ID)->get();
        else
            $khoahoc = KhoaHoc::where('TRUCTUYEN', '0')->get();
        $cauhoi = DB::table('CTBaiThi')
            ->join('CauHoi', 'CTBaiThi.MACH', '=', 'CauHoi.MACH')
            ->whereNull('MABT')->get();
        return view('admin.baithi.detail', compact('khoahoc', 'id', 'cauhoi'));
    }

    public function storeChiTiet(Request $request, $id)
    {
        $cauhoi = DB::table('CTBaiThi')
            ->join('CauHoi', 'CTBaiThi.MACH', '=', 'CauHoi.MACH')
            ->whereNull('MABT')->get();
        foreach ($cauhoi as $ch) {
            DB::table('CTBaiThi')->whereNull('MABT')->where('MACH', $ch->MACH)->update(['DIEM' => $request->get('Diem' . $ch->MACH)]);
        }

        DB::table('CTBaiThi')->whereNull('MABT')->update(['MABT' => session('mabt')]);
        return redirect('admin/baithi')->with('thongbao', 'Thêm thành công!');
    }

    public function scores($id)
    {
        $bailam = DB::table('BaiLam')
            ->join('TaiKhoan', 'TaiKhoan.ID', '=', 'BaiLam.MAHV')
            ->where('MABT', $id)->get();

        $ctbailam = DB::table('BaiLam')
            ->join('CTBaiLam', 'CTBaiLam.MABL', '=', 'BaiLam.MABL')
            ->join('TaiKhoan', 'TaiKhoan.ID', '=', 'BaiLam.MAHV')
            ->where('MABT', $id)->get();

        $baithi = DB::table('BaiThi')
            ->join('CTBaiThi', 'CTBaiThi.MABT', '=', 'BaiThi.MABT')
            ->join('CauHoi', 'CauHoi.MACH', '=', 'CTBaiThi.MACH')
            ->where('CTBaiThi.MABT', $id)->get();
        return view('admin.baithi.scores', compact('bailam', 'id', 'ctbailam', 'baithi'));
    }

    public function score($id, $mahv)
    {
        $bailam = DB::table('BaiLam')
            ->join('TaiKhoan', 'TaiKhoan.ID', '=', 'BaiLam.MAHV')
            ->where('MABT', $id)
            ->where('MAHV', $mahv)->first();

        $ctbailam = DB::table('BaiLam')
            ->join('CTBaiLam', 'CTBaiLam.MABL', '=', 'BaiLam.MABL')
            ->join('TaiKhoan', 'TaiKhoan.ID', '=', 'BaiLam.MAHV')
            ->where('MABT', $id)
            ->where('MAHV', $mahv)->get();

        $baithi = DB::table('BaiThi')
            ->join('CTBaiThi', 'CTBaiThi.MABT', '=', 'BaiThi.MABT')
            ->join('CauHoi', 'CauHoi.MACH', '=', 'CTBaiThi.MACH')
            ->where('CTBaiThi.MABT', $id)->get();


        $diem = 0;
        foreach ($ctbailam as $ct) {
            $CAUHOI = $baithi->where('MACH', $ct->MACH)->first();
            if ($ct->DAPAN == $CAUHOI->CAUDUNG)
                $diem += $CAUHOI->DIEM;
        }
        return view('admin.baithi.score', compact('bailam', 'id', 'mahv', 'ctbailam', 'baithi', 'diem'));
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
        if (session('mabt') != null) {
            $baithi = BaiThi::find(session('mabt'));
        } else {
            do {
                $ma = random_int(10000, 99999);
                $baithi = BaiThi::find($ma);
            } while ($baithi);
            $baithi = new BaiThi();
            $baithi->MABT = $ma;
        }

        $baithi->TENBT = $request->TENBT;
        if ($id == -2) {
            $baithi->MAGV = session('login')->ID;
            $baithi->TGBD = $request->TGBD;
            $baithi->TGKT = $request->TGKT;
            $baithi->save();
        } else {
            $MAKH = $request->MAKHbaithi;
            $khoahoc = KhoaHoc::find($MAKH);
            $baithi->MAGV = $khoahoc->MAGV;
            $baithi->save();
            if (session('mabt') == null)
                DB::table('BaiHoc')
                    ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                    ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                    ->where('KhoaHoc.MAKH', $khoahoc->MAKH)
                    ->update(['MABT' => $ma]);
        }

        if (session('mabt') == null) session(['mabt' => $ma]);
        return redirect('admin/baithi/them/' . $id . '/chitiet/');
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
        if ($baithi->TGBD != null) {
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

        $cauhoi = DB::table('CTBaiThi')
            ->where('MABT', $id)->get();
        foreach ($cauhoi as $ch) {
            DB::table('CTBaiThi')->where('MABT', $id)->where('MACH', $ch->MACH)->update(['DIEM' => $request->get('Diem' . $ch->MACH)]);
        }

        DB::table('CTBaiThi')->whereNull('MABT')->update(['MABT' => $baithi->MABT]);

        return redirect('admin/baithi/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $baithi = BaiThi::find($id);
        $bailam = BaiLam::where('MABT', $id)->get();
        if (count($bailam) == 0) {
            $baithi->delete();
            return redirect('admin/baithi/')->with('thongbao', 'Xóa thành công!');
        } else
            return redirect('admin/baithi/')->with('thongbao', 'Đã có học viên làm bài thi này. Không thể xóa bài thi này!');
    }

    public function indexCauHoi($id)
    {
        $temps = DB::table('CTBaiThi')->select('MACH')->whereNull('MABT')->get()->toArray();
        $data[] = -1;
        foreach ($temps as $temp) {
            $data[] = $temp->MACH;
        }
        $cauhoi = DB::table('CauHoi')
            ->join('DanhMuc', 'DanhMuc.MADM', 'CauHoi.MADM')
            ->whereNotIn('MACH', $data)
            ->get();
        $danhmuc = DanhMuc::where('MADMCHA', '>', '0')->get();
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

        if ($id < 0) return redirect('admin/baithi/them/' . $id . '/chitiet')->with('thongbao', 'Thêm câu hỏi thành công!');
        return redirect('admin/baithi/sua/' . $id . '/chitiet')->with('thongbao', 'Thêm câu hỏi thành công!');
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

        if ($id < 0) return redirect('admin/baithi/them/' . $id . '/chitiet')->with('thongbao', 'Thêm câu hỏi thành công!');
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

        return redirect('admin/baithi/' . $id . '/cauhoi/sua/' . $mach)->with('thongbao', 'Sửa câu hỏi thành công!');
    }

    public function deleteCauHoi($id, $mach)
    {
        if ($id < 0)
            DB::table('CTBaiThi')->whereNull('MABT')->where('MACH', $mach)->delete();
        else DB::table('CTBaiThi')->where('MABT', $id)->where('MACH', $mach)->delete();

        //! xoa cau hoi
        if ($id < 0) return redirect('admin/baithi/xoa/' . $id . '/chitiet')->with('thongbao', 'Xóa câu hỏi thành công!');
        return redirect('admin/baithi/xoa/' . $id)->with('thongbao', 'Xóa câu hỏi thành công!');
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

    public function formDuyet($id, $search)
    {
        return view('admin.baithi.duyet', compact('id', 'search'));
    }

    public function duyet(Request $request, $id, $search)
    {
        $baiThi = BaiThi::find($id);
        $baiThi->TRANGTHAI = $request->status;
        $baiThi->COMMENT = $request->comment;
        $baiThi->MANKD = session('login')->ID;
        $baiThi->save();
        return redirect('admin/baithi/search=' . $search)->with('thongbao', 'Duyệt thành công!');
    }
}
