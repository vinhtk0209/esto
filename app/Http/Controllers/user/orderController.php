<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\Cart;
use App\Models\CTLopHoc;
use App\Models\KhoaHoc;
use App\Models\LopHoc;
use Illuminate\Support\Facades\Session;

class orderController extends Controller
{
    public function checkout()
    {
        return view('user.checkout.index');
    }

    public function handleCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return view('user.cart.index');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $bill = HoaDon::create([
            'MAHV'   => Session::get('customer')->ID
        ]);

        foreach ($cart->items as $row) {
            CTHoaDon::create([
                'MAHD' => $bill->MAHD,
                'MAKH' => $row['item']['MAKH'],
                'MALH' => 0
            ]);
        }

        Session::forget('cart');
        return redirect()->route('home.index');
    }

    public function handleBuyClass(Request $request, $id)
    {
        if (Session::has('customer')) {
            $data = $request->all();
            $billExist = HoaDon::join('cthoadon', 'cthoadon.MAHD', '=', 'hoadon.MAHD')
                ->where('MALH', $data['listClass'])
                ->where('MAKH', $id)
                ->where('MAHV', Session::get('customer')->ID)
                ->first();
            if (isset($billExist) && !is_null($billExist)) {
                return redirect()->back()->with('buyClassFailed', 'Bạn đã mua lớp học này');
            } else {
                $classId =  LopHoc::find($data['listClass']);
                $numStudent = $classId->SLGIOIHAN;
                if ($numStudent > 0) {
                    $classId->SLGIOIHAN = $numStudent - 1;
                    $classId->save();
                    $bill = HoaDon::create([
                        'MAHV'   => Session::get('customer')->ID
                    ]);
                    CTHoaDon::create([
                        'MAHD' => $bill->MAHD,
                        'MAKH' => $id,
                        'MALH' => $data['listClass'],
                    ]);
                    CTLopHoc::create([
                        'MALH' => $data['listClass'],
                        'MAHV'   => Session::get('customer')->ID,
                    ]);
                } else {
                    return redirect()->back()->with('buyClassFailed', 'Lớp này đã hết chỗ');
                }
            }
            return redirect()->back()->with('buyClassSuccess', 'Mua thành công');
        } else {
            return redirect()->back()->with('noLogin', 'Vui lòng đăng nhập để tiếp tục  ');
        }
    }
}