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
                            <li class="breadcrumb-item"><a href="admin/taikhoan/">Quản Lý Tài Khoản</a></li>                            
                            <li class="breadcrumb-item"><a href="admin/taikhoan/them">Thêm Tài Khoản</a></li>
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
                <img src="public/images/csharptoantap.jpg" alt="Image placeholder" class="card-img-top" width="250px" height="160px">
                <div class="course-des">
                    <div class="name-course">
                        <h4></h4>
                    </div>
                    <div class="name-teacher d-flex flex-space">
                        <p class=""></p>
                        <div class="price price-discount">
                            <p><del></del><span class="price-unit"><sup>vnd</sup></span></p>
                        </div>
                    </div>
                    <div class="price-course d-flex flex-space">
                        <div class="rate">
                            <p>
                                <span class="star-rate">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                </span>
                            </p>
                        </div>
                        <p><span class="price-unit"><sup>vnd</sup></span></p>
                    </div>
                </div>
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Họ và Tên</label>
                                        <input type="text" name="HOTEN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Ngày Sinh</label>
                                        <input type="date" name="NGAYSINH" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Email</label>
                                        <input type="text" name="EMAIL" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Số điện thoại</label>
                                        <input type="text" name="SODIENTHOAI" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Giới Tính</label></br>
                                        <input name="type" type="radio" id="nam" value="0" style="vertical-align:middle; cursor: pointer;" checked>
                                        <label>Nam</label><br>
                                        <input name="type" type="radio" id="nu" value="1" style="vertical-align:middle; cursor: pointer;">
                                        <label>Nữ</label><br>
                                        <input name="type" type="radio" id="khac" value="2" style="vertical-align:middle; cursor: pointer;">
                                        <label>Không muốn trả lời </label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Loại tài khoản</label></br>
                                        <select name="MALOAI">
                                            
                                            @foreach($taikhoan as $tk)
                                            <option value="{{ $tk->ID }}">{{ $tk->MALOAI }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        
                        <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Mật khẩu</label>
                                        <input type="password" name="MATKHAU" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Mật khẩu mới</label>
                                        <input type="password" name="MATKHAU1" class="form-control">
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Ảnh đại diện</label>
                                <input type="file" name="ANH" class="form-control">
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Chứng chỉ cá nhân</label>
                                <textarea rows="4" name="CTCANHAN" class="form-control"></textarea>
                            </div>
                        </div>
                        
                        <div class="row align-items-center">
                            <div class="col-8">
                                <button type="submit" class="btn btn-default">Thêm</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 