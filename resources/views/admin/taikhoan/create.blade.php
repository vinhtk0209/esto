@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/taikhoan/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/taikhoan/">Quản Lý tài khoản</a></li>
                            <li class="breadcrumb-item"><a href="admin/taikhoan/them">Thêm tài khoản</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="./images/image.png" id="anhtk" class="card-img-top" width="200px" height="250px">
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Thêm tài khoản</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/taikhoan/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/taikhoan/them" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin tài khoản</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <p id ="anh123" > </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Họ và tên</label>
                                        <input type="text" id="HOTEN" name="HOTEN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Số điện thoại</label>
                                        <input type="text" id="SODIENTHOAI" name="SODIENTHOAI" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Ngày sinh</label></br>
                                        <input type="date" id="NGAYSINH" name="NGAYSINH" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Giới tính</label></br>
                                        <input name="GIOITINH" type="radio" id="nam" value="1" style="vertical-align:middle; cursor: pointer;" checked>
                                        <label>Nam</label><br>
                                        <input name="GIOITINH" type="radio" id="nu" value="0" style="vertical-align:middle; cursor: pointer;">
                                        <label>Nữ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" id="EMAIL" name="EMAIL" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Loại tài khoản</label>
                                <select name="LOAITK" id="LOAITK">
                                            <option value="2">Giảng Viên</option>
                                        </select>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Mật khẩu</label>
                                        <input type="password" id="MATKHAU" name="MATKHAU" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Nhập lại mật khẩu</label>
                                        <input type="password" id="MATKHAU1" name="MATKHAU1" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Hình ảnh</label>
                                <input type="file" id="ANH" name="ANH" class="form-control"></br>                                
                                
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Chi tiết cá nhân</label>
                                <textarea rows="4" name="CTCANHAN" class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Trạng thái</label>
                                <input name="TRANGTHAI" type="radio" id="hoatdong" value="1" style="vertical-align:middle; cursor: pointer;" checked>
                                <label>Hoạt động</label>
                                <input name="TRANGTHAI" type="radio" id="vohieu" value="0" style="vertical-align:middle; cursor: pointer;">
                                <label>Vô hiệu hóa</label>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <label id="lbl"></label>
                                <button type="submit" class="btn btn-default">Thêm</button>
                            </div>
                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
