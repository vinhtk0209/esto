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
                <form action="{{ route('handle.checkout') }}" method="POST">

                    @csrf 
                    
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="name" value="{{ Session::get('customer')->HOTEN }}" class="form-control" style="width:30%" readonly />
                    </div>
                    <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" value="{{ Session::get('customer')->SODIENTHOAI }}" class="form-control" style="width:30%" readonly />
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">Thanh toán</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
@endsection