<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BaiHoc;
use App\Models\KhoaHoc;

class BaiHocController extends Controller
{
    public function index()
    {
        return view('admin.baihoc.index');
    } 

    public function create(Request $request)
    {        
        $MAKH = $request->id;
        $khoahoc = KhoaHoc::find($MAKH);
        return view('admin.baihoc.create', ['khoahoc'=>$khoahoc]);
    }

    public function store(Request $request)
    {
        $MAKH = $request->id;
        // $khoahoc = new KhoaHoc();
        // $khoahoc->TENKH = $request->TENKH;
        // $khoahoc->DONGIA = $request->DONGIA;
        // $khoahoc->MADM = $request->MADM;
        // if($request->tructuyen == 'checked'){

        //     $khoahoc->TRUCTUYEN = true;  
        // } 
        // else {

        //     $khoahoc->TRUCTUYEN = false;  
        // }   
        // $khoahoc->GIOITHIEUKH = $request->GIOITHIEUKH;
        // $khoahoc->CHITIETKH = $request->CHITIETKH;
        // if ($request->hasFile('ANH')) {
        //     $file = $request->file('ANH');
        //     $name = $file->getClientOriginalName();
        //     $hinh = Str::random(4) . "_" . $name;
        //     while (file_exists("public/images/" . $hinh)) {
        //         $hinh = Str::random(4) . "_" . $name;
        //     }
        //     $file->move("public/images/", $hinh);
        //     $khoahoc->ANH = $hinh;
        // } else {
        //     $khoahoc->ANH = "";
        // }

        // $khoahoc->save();

        // return redirect('admin/khoahoc/them')->with('thongbao', 'Thêm thành công!');
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function delete($id)
    {
        
    }
}
