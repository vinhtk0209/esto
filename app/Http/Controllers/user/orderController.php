<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDon;
use App\Models\CTHoaDon;
use App\Models\Cart;
use App\Models\CTLopHoc;
use App\Models\LopHoc;
use App\Models\Khoahoc;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Customer;
use Carbon\Carbon;

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
        Stripe::setApiKey('sk_test_51L2IngIbEDDXclFIDUro3TzOtoafIWpv20mYo4ODrZq09lYaJY8WHHp1rOgnMQOVHvuuTecaJN2oZwRypq6qEMVb00cC1i4EU6');
        $customer = new Customer();
        $customerDetailsAry = array(
            'email' => $request->email,
            'source' => $request->stripeToken
        );
        $customerDetails = $customer->create($customerDetailsAry);
        $charge = Charge::create(array(
            "customer" => $customerDetails->id,
            "amount" => $cart->totalPrice,
            "currency" => $request->currency_code,
        ));
        HoaDon::create([
            'MAHD'   => $charge->id,
            'MAHV'   => Session::get('customer')->ID
        ]);
        foreach ($cart->items as $row) {
            CTHoaDon::create([
                'MAHD' => $charge->id,
                'MAKH' => $row['item']['MAKH'],
                'MALH' => 0
            ]);
        }

        Session::forget('cart');
        return redirect()->route('home.index')->with('buyClassSuccess', 'Thanh toán thành công');;
    }

    public function handleBuyClass(Request $request, $id)
    {
        $today = Carbon::createFromTimestamp(strtotime(date("Y-m-d h:i:sa")));
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
            Stripe::setApiKey('sk_test_51L2IngIbEDDXclFIDUro3TzOtoafIWpv20mYo4ODrZq09lYaJY8WHHp1rOgnMQOVHvuuTecaJN2oZwRypq6qEMVb00cC1i4EU6');
            $customer = new Customer();
            $customerDetailsAry = array(
                'email' => $request->email,
                'source' => $request->stripeToken
            );
            $customerDetails = $customer->create($customerDetailsAry);
            $charge = Charge::create(array(
                "customer" => $customerDetails->id,
                "amount" => Khoahoc::find($classId->MAKH)->DONGIA,
                "currency" => $request->currency_code,
            ));
            $numStudent = $classId->SLGIOIHAN;
            $dayStart = $classId->NGAYMOLOP;
            if ($today < $dayStart) {
                if ($numStudent > 0) {
                    $classId->SLGIOIHAN = $numStudent - 1;
                    $classId->save();
                    HoaDon::create([
                        'MAHD'   => $charge->id,
                        'MAHV'   => Session::get('customer')->ID
                    ]);
                    CTHoaDon::create([
                        'MAHD' => $charge->id,
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
            } else {
                return redirect()->back()->with('buyClassFailed', 'Lớp này đã bắt đầu không thể mua được');
            }
        }
        return redirect()->back()->with('buyClassSuccess', 'Mua thành công');
    }
}