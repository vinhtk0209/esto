<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use Illuminate\Http\Request;

class LopHocController extends Controller
{
    public function index()
    {
        $lophoc = LopHoc::paginate(5);
        return view('admin.lophoc.index', ['lophoc'=>$lophoc]);
    } 
    
    public function create()
    {
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

        return redirect('admin/lophoc/sua/'.$id)->with('thongbao', 'Sửa thành công!');
    }

    public function delete($id)
    {
        $lophoc = LopHoc::find($id);
        $lophoc->delete();

        return redirect('admin/lophoc/')->with('thongbao', 'Xóa thành công!');
    }
}
