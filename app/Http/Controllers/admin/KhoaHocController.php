<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;

class KhoaHocController extends Controller
{
    public function index()
    {
        $khoahoc = KhoaHoc::all();
        return view('admin.khoahoc.index', ['khoahoc'=>$khoahoc]);
    } 
}
