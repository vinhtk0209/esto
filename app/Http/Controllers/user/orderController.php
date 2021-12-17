<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class orderController extends Controller
{
    public function checkout()
    {
        return view('user.checkout.index');
    }

    public function handleCheckout(Request $request)
    {
        if(!Session::has('cart')){
            return view('user.cart.index');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $bill = HoaDon::create([
            'NGAYHD' => Carbon::now(),
            'MAHV'   => Session::get('customer')->ID
        ]);

        foreach($cart->items as $row){
            CTHoaDon::create([
                'MAHD' => $bill->ID,
                'MAKH' => $row['item']['id']
            ]);
        }

        Session::forget('cart');
        return redirect()->route('home.index');
    }
}
