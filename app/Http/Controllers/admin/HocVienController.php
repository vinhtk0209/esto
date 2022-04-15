<?php

namespace App\Http\Controllers\admin;

use App\Models\LopHoc;
use App\Models\CTLopHoc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HocVienController extends Controller
{
    public function index()
    {
        $lophoc = LopHoc::paginate(10);
        return view('admin.hocvien.index' , ['lophoc' => $lophoc]);
    } 
    
    public function viewlop($id)
    {
        $ctlophoc = CTLopHoc::where('MALH', '=', $id)->paginate(10);
        $lophoc = LopHoc::find($id);
        return view('admin.hocvien.ctlop' , compact('ctlophoc' , 'id' , 'lophoc'));
    }

    
}
