<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\KhoaHoc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class productController extends Controller
{
    public function detailProduct($productId)
    {
        $product  = DB::table('khoahoc')
            ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->where('MAKH', '=', $productId)->select('*')->first();

        // $product = KhoaHoc::where('MAKH', '=', $productId)->select('*')->first();
        // related course
        // foreach ($product as $value) {
        //     $courseCate = $value->MADM;
        // }
        // $relatedCourse  = DB::table('khoahoc')
        //     ->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')
        //     ->where('MAKH', '=', $productId)->select('*')->first();
        return view('/user/courseDetail/index', compact('product'));
    }
    public function listCourse($courseCate)
    {
        $cateCourse = DB::table('danhmuc')->where('MADMCHA', 0)->orderby('MADM', 'desc')->get();
        // $listCourse = DB::table('khoahoc')->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->orderby('MAKH', 'desc')->limit(8)->get();

        //lay gia tri danh muc theo danh muc cua khoa hoc duoc truyen vao hien thi ra mot danh sach cac khoa hoc thuoc danh muc do
        $cateById = DB::table('khoahoc')->join('danhmuc', 'khoahoc.MADM', '=', 'danhmuc.MADM')->where('khoahoc.MADM', '=', $courseCate)->join('taikhoan', 'khoahoc.MAGV', '=', 'ID')->get();
        //hien thi mot lan ten cua danh muc
        $cateName = DB::table('danhmuc')->where('danhmuc.MADM', $courseCate)->limit(1)->get();


        return view('user.listCourse.index')->with('category', $cateCourse)->with('cateById', $cateById)->with('cateName', $cateName);
    }

    public function addToCart(Request $request)
    {
        $product = KhoaHoc::find($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->MAKH);
        $request->session()->put('cart',$cart);
        return response()->json([
            'status' => 200,
            'qty'    => Session::get('cart')->totalQty,
            'price'  => Session::get('cart')->totalPrice
        ]);
    }

    public function getCart()
    {
        return view('user.cart.index');
    }

    public function deleteItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->deleteItem($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function increaseItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseItemByOne($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }

    public function decreaseItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->decreaseItemByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
}