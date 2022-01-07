<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LopHocController extends Controller
{
    public function index()
    {
        if (session('login')->LOAITK == 2)
            $lophoc = DB::table('LopHoc')
                ->join('KhoaHoc', 'LopHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('MAGV', session('login')->ID)
                ->orderBy('TENKH', 'desc')->paginate(10);
        else
            $lophoc = DB::table('LopHoc')
                ->join('KhoaHoc', 'LopHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->orderBy('TENKH', 'desc')->paginate(10);
        return view('admin.lophoc.index', ['lophoc' => $lophoc]);
    }

    public function create()
    {
        if (session('login')->LOAITK == 2)
            $khoahoc = KhoaHoc::where('TRUCTUYEN', '=', 1)
                ->where('MAGV', session('login')->ID)->get();
        else
            $khoahoc = KhoaHoc::where('TRUCTUYEN', '=', 1)->get();
        return view('admin.lophoc.create', ['khoahoc' => $khoahoc]);
    }

    public function store(Request $request)
    {
        $lophoc = new LopHoc();
        $lophoc->TENLOP = $request->TENLOP;
        $lophoc->MAKH = $request->MAKH;
        $lophoc->SLGIOIHAN = $request->SLGIOIHAN;
        $lophoc->NGAYMOLOP = $request->NGAYMOLOP;
        $lophoc->save();

        return redirect('admin/lophoc/them')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        $lophoc = LopHoc::find($id);
        $khoahoc = KhoaHoc::where('TRUCTUYEN', '=', 1)->get();
        return view('admin.lophoc.edit', compact('lophoc', 'khoahoc'));
    }

    public function update(Request $request, $id)
    {
        $lophoc = LopHoc::find($id);
        $lophoc->TENLOP = $request->TENLOP;
        $lophoc->MAKH = $request->MAKH;
        $lophoc->SLGIOIHAN = $request->SLGIOIHAN;
        $lophoc->NGAYMOLOP = $request->NGAYMOLOP;
        $lophoc->save();

        return redirect('admin/lophoc/sua/' . $id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $lophoc = LopHoc::find($id);
        $lophoc->delete();

        return redirect('admin/lophoc/')->with('thongbao', 'Xóa thành công!');
    }

    public function search(Request $request)
    {
        $outputLH = 'none';
        $outputPage = 'all';
        if (empty($request->keyword)) $lophoc = DB::table('LopHoc')
            ->join('KhoaHoc', 'LopHoc.MAKH', '=', 'KhoaHoc.MAKH')
            ->orderBy('TENKH', 'desc')->paginate(10);
        else {
            $lophoc = DB::table('LopHoc')
                ->join('KhoaHoc', 'LopHoc.MAKH', '=', 'KhoaHoc.MAKH')
                ->where('TENKH', 'LIKE', '%' . $request->keyword . '%')
                ->orWhere('TENLOP', 'LIKE', '%' . $request->keyword . '%')
                ->orderBy('TENKH', 'desc')->get();
            $outputPage = 'none';
        }
        foreach ($lophoc as $lh) {
            $outputLH .= '<tr>
            <td class="budget">
                ' . $lh->TENLOP . '
            </td>
            <td class="budget">
                ' . $lh->SLGIOIHAN . '
            </td>
            <td class="budget">
                ' . $lh->NGAYMOLOP . '
            </td>
            <td class="budget">
                ' . $lh->TENKH . '
            </td>
            <td class="left">
                <a href="admin/lophoc/sua/' . $lh->MALH . '" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                <a href="admin/lophoc/xoa/' . $lh->MALH . '" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm(' . "Bạn có muốn xóa mục này?" . ')"><i class="material-icons">&#xE872;</i></a>
            </td>
        </tr>';
        }
        $outputLH = mb_convert_encoding($outputLH, "UTF-8", "auto");
        $output = array($outputLH, $outputPage);
        return response()->json($output);
    }
}
