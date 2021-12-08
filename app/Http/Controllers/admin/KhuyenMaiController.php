<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhuyenMai;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;

class KhuyenMaiController extends Controller
{
    public function index()
    {
        $khuyenmai = KhuyenMai::all();
        return view('admin.khuyenmai.index', ['khuyenmai'=>$khuyenmai]);
    }

    public function chitietkm()
    {
        $khoahoc = KhoaHoc::all();
        return view('admin.khuyenmai.chitietkm', ['khoahoc'=>$khoahoc]);
    }
    
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
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
