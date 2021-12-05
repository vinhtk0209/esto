<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function detailProduct($productId)
    {
        $product  = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('MAKH', '=', $productId)->select('*')->first();

        // $product = KhoaHoc::where('MAKH', '=', $productId)->select('*')->first();
        return view('/user/courseDetail/index', compact('product'));
    }
}