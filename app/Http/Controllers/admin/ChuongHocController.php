<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ChuongHoc;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;

class ChuongHocController extends Controller
{
    public function index()
    {
        $chuonghoc = ChuongHoc::orderBy('MAKH', 'desc')->paginate(10);
        $khoahoc = KhoaHoc::all();
        return view('admin.chuonghoc.index', compact('chuonghoc', 'khoahoc'));
    }

    public function store(Request $request)
    {
        $chuonghoc = new ChuongHoc();
        $chuonghoc->TENCHUONG = $request->TENCHUONG;
        $chuonghoc->MAKH = $request->MAKH;
        $chuonghoc->save();

        return redirect('admin/chuonghoc')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $chuonghoc = ChuongHoc::find($id);
            return response()->json(['chuonghoc' => $chuonghoc]);
        }
    }

    public function update(Request $request, $id)
    {
        $chuonghoc = ChuongHoc::find($id);
        $chuonghoc->TENCHUONG = $request->TENCHUONG;
        $chuonghoc->MAKH = $request->MAKH;
        $chuonghoc->save();

        return redirect('admin/chuonghoc')->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $chuonghoc = chuonghoc::find($id);
        $chuonghoc->delete();

        return redirect('admin/chuonghoc/')->with('thongbao', 'Xóa thành công!');
    }
}
