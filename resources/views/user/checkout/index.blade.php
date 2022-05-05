@extends('user.layout.index')
@section('content')
<section class="best-seller mb-16">
    <div class="best-seller-head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-course">THÔNG TIN CÁ NHÂN</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('handle.checkout') }}" method="POST" id="checkout-form">

                    @csrf
                    <input type='hidden' name='currency_code' value='VND'>

                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" id="name" value="{{ Session::get('customer')->HOTEN }}" class="form-control" style="width:30%" readonly />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" value="{{ Session::get('customer')->EMAIL }}" class="form-control" style="width:30%" readonly />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" id="phone" value="{{ Session::get('customer')->SODIENTHOAI }}" class="form-control" style="width:30%" readonly />
                    </div>
                    <div class="form-group">
                        <p>Số thẻ</p>
                        <input type="text" placeholder="Nhập số thẻ" id="card-number" class="form-control" style="width:30%" required>
                    </div>
                    <div class="form-group">
                        <p>Hạn mức tháng</p>
                        <input type="number" placeholder="Nhập số thẻ" id="card-expiry-month" min=1 max=12 class="form-control" style="width:30%" required>
                    </div>
                    <div class="form-group">
                        <p>Hạn mức năm</p>
                        <input type="number" placeholder="Nhập số thẻ" id="card-expiry-year" min=2022 max=2030 class="form-control" style="width:30%" required>
                    </div>
                    <div class="form-group">
                        <p>CVC</p>
                        <input type="text" placeholder="Nhập CVC" id="card-cvc" class="form-control" style="width:30%" required>
                    </div>
                    {{-- <div class="form-group">
                        @php
                        $priceTotal =Session::get('cart')->totalPrice ;
                        $vndToUsd =$priceTotal/23000;
                        @endphp
                        <div id="paypal-button"></div>
                        <input type="hidden"  value="{{ round($vndToUsd,2) }}" id="paypalPrice"   />
                    </div> --}}
                    <div class="form-group">
                        <button type="submit" name="btnSubmit" class="btn btn-success">Thanh toán</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection
