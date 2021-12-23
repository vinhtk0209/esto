@extends('user.layout.index')
@section('content')
<section class="best-seller mb-16">
    <div class="best-seller-head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-course">GIỎ HÀNG</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            use App\Models\Cart;
                            $oldCart = Session::get('cart');
                            $cart = new Cart($oldCart);
                        @endphp
                        @if (!empty($cart->items))
                            @foreach ($cart->items as $row)
                                <tr>
                                    <td>
                                        <img src="{{asset('user/assets/imgCourse')}}/{{$row['item']['ANH']}}" alt="{{ $row['item']['TENKH'] }}" width="100">
                                    </td>
                                    <td>
                                        <h5>{{ $row['item']['TENKH'] }}</h5>
                                    </td>
                                    <td>
                                        {{ number_format($row['item']['DONGIA'],-3,',',',') }} vnd
                                    </td>
                                    <td>
                                        <a href="{{ route('delete.item', ['id' => $row['item']['MAKH']]) }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" align="center">Chưa có sản phẩm</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ route('home.index') }}" class="primary-btn cart-btn">TIẾP TỤC MUA HÀNG</a>
            </div>
            @if (!empty($cart->items))
                <div class="col-lg-6">
                    <ul>
                        <li>Tổng tiền <span class="text-danger">{{ number_format(Session::get('cart')->totalPrice,-3,',',',') }} vnd</span></li>
                    </ul>
                    @if (Session::has('customer'))
                        <a href="{{ route('home.checkout') }}" class="primary-btn">THANH TOÁN</a>
                    @else
                        <a href="{{ route('login.login') }}" class="primary-btn">VUI LÒNG ĐĂNG NHẬP</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>
@endsection
