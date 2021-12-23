<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaiHoc;
use App\Models\BaiLam;
use App\Models\ChuongHoc;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use App\Models\LopHoc_BaiHoc;
use Illuminate\Support\Facades\DB;

class BaiHocController extends Controller
{
    public function index($id = 0)
    {
        if ($id == 0) {
            $baihoc = DB::table('BaiHoc')
                ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('TRUCTUYEN', $id)->paginate(10);
            return view('admin.baihoc.index', ['baihoc' => $baihoc], ['id' => $id]);
        } else {
            $lophoc_baihoc = DB::table('LopHoc_BaiHoc')
                ->join('LopHoc', 'LopHoc_BaiHoc.MALH', '=', 'LopHoc.MALH')
                ->join('BaiHoc', 'LopHoc_BaiHoc.MABH', '=', 'BaiHoc.MABH')
                ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('TRUCTUYEN', $id)->paginate(10);
            return view('admin.baihoc.index', ['lophoc_baihoc' => $lophoc_baihoc], ['id' => $id]);
        }
    }

    public function create()
    {
        $khoahoc = KhoaHoc::all();
        $chuonghoc = ChuongHoc::all();
        return view('admin.baihoc.create', compact('khoahoc', 'chuonghoc'));
    }

    public function store(Request $request)
    {
        $MAKH = $request->MAKH; 
        $khoahoc = KhoaHoc::find($MAKH);
        $baihoc = new BaiHoc();       
        $baihoc->MACHUONG = $request->MACHUONG;
        $baihoc->TENBH = $request->TENBH;
        $baihoc->save();
        if ($khoahoc->TRUCTUYEN == true) {
            $lophoc_baihoc = new LopHoc_BaiHoc();
            $lophoc_baihoc->MABH = $baihoc->MABH;
            $lophoc_baihoc->MALH = $request->MALH;
            $lophoc_baihoc->TGBD = $request->TGBD;
            $lophoc_baihoc->TGKT = $request->TGKT;
            $lophoc_baihoc->LINK = $request->LINK;
            $lophoc_baihoc->save();
        } else {
            $baihoc = BaiHoc::find($baihoc->MABH);
            $baihoc->VIDEO = $request->VIDEO;
            $baihoc->HOCTHU = $request->HOCTHU;
            $baihoc->save();
        }

        return redirect('admin/baihoc/them')->with('thongbao', 'Thêm thành công!');
    }

    public function hinhthuc(Request $request)
    {
        $dlophoc = "video";
        $dchuonghoc = "chuonghoc";
        $khoahoc = KhoaHoc::find($request->key);
        if ($khoahoc->TRUCTUYEN == true) {
            $lophoc = LopHoc::where('MAKH', $request->key)->get();
            if (count($lophoc) > 0) {
                $dlophoc = '<div class="form-group">
            <label class="form-control-label" for="input-first-name">Lớp học</label></br>
            <select name="MALH">';
                foreach ($lophoc as $lh) {
                    $dlophoc .= '<option value="' . $lh->MALH . '">' . $lh->TENLOP . '</option>';
                }
                $dlophoc .= '</select>
            </div>';
            } else $dlophoc = "tructuyen";
        }

        $chuonghoc = ChuongHoc::where('MAKH', $request->key)->get();
        if (count($chuonghoc) > 0) {
            $dchuonghoc = '<div class="form-group">
            <label class="form-control-label" for="input-first-name">Chương học</label></br>
            <select name="MACHUONG">';
            foreach ($chuonghoc as $ch) {
                $dchuonghoc .= '<option value="' . $ch->MACHUONG . '">' . $ch->TENCHUONG . '</option>';
            }
            $dchuonghoc .= '</select>
            </div>';
        }

        $output = array($dlophoc, $dchuonghoc);
        return response()->json($output);
    }

    public function edit($bh, $lh = 0)
    {
        if ($lh == 0) {
            $baihoc = BaiHoc::where('MABH', $bh)->get();
            $khoahoc = KhoaHoc::all();
            $chuonghoc = ChuongHoc::where('MAKH', $baihoc[0]->rChuongHoc->MAKH)->get();
            return view('admin.baihoc.edit', compact('khoahoc', 'baihoc', 'chuonghoc'));
        } else {
            $baihoc = DB::table('LopHoc_BaiHoc')
                ->join('LopHoc', 'LopHoc_BaiHoc.MALH', '=', 'LopHoc.MALH')
                ->join('BaiHoc', 'LopHoc_BaiHoc.MABH', '=', 'BaiHoc.MABH')
                ->join('ChuongHoc', 'BaiHoc.MACHUONG', '=', 'ChuongHoc.MACHUONG')
                ->join('KhoaHoc', 'ChuongHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('LopHoc_BaiHoc.MABH', $bh)
                ->where('LopHoc_BaiHoc.MALH', $lh)->get();
            $khoahoc = KhoaHoc::all();
            $chuonghoc = ChuongHoc::where('MAKH', $baihoc[0]->MAKH)->get();
            $lophoc = LopHoc::all();
            return view('admin.baihoc.edit', compact('khoahoc', 'lophoc', 'baihoc', 'chuonghoc'));
        }
    }

    public function update(Request $request, $bh, $lh = 0)
    {
        $baihoc = BaiHoc::find($bh);
        $baihoc->TENBH = $request->TENBH;
        $baihoc->MACHUONG = $request->MACHUONG;
        if ($lh != 0) {
            LopHoc_BaiHoc::where('MABH', $bh)
                ->where('MALH', $lh)->limit(1)
                ->update(['TGBD' => $request->TGBD, 'TGBD' => $request->TGKT, 'LINK' => $request->LINK]);
        } else {
            $baihoc->VIDEO = $request->VIDEO;
            $baihoc->HOCTHU = $request->HOCTHU;
        }
        $baihoc->save();

        return redirect('admin/baihoc/sua/bh=' . $bh . '&lh=' . $lh)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($bh, $lh = 0)
    {
        if ($lh == 0) {
            $baihoc = BaiHoc::find($bh);
            $baihoc->delete();
        } else {
            $lophoc_baihoc = DB::table('LopHoc_BaiHoc')
                ->where('MABH', $bh)
                ->where('MALH', $lh);
            $lophoc_baihoc->delete();
            $baihoc = BaiHoc::find($bh);
            $baihoc->delete();
        }
        return redirect('admin/baihoc')->with('thongbao', 'Xóa thành công!');
    }
}
