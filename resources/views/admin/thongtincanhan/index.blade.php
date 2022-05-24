@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/thongtincanhan/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/thongtincanhan/">Thông tin cá nhân</a></li>
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
                <img src="./images/{{$taikhoan->ANHDAIDIEN}}" id="anh" class="card-img-top" width="200px" height="250px">
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <form action="admin/thongtincanhan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin tài khoản</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <p id="anh123"> </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Họ và tên</label>
                                        <input type="text" id="HOTEN" name="HOTEN" class="form-control" value="{{$taikhoan->HOTEN}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Số điện thoại</label>
                                        <input type="text" id="SODIENTHOAI" name="SODIENTHOAI" class="form-control" value="{{$taikhoan->SODIENTHOAI}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Ngày sinh</label></br>
                                        <input type="date" id="NGAYSINH" name="NGAYSINH" class="form-control" value="{{ date('Y-m-d', strtotime($taikhoan->NGAYSINH)) }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Giới tính</label></br>
                                        <input name="GIOITINH" type="radio" id="nam" value="1" style="vertical-align:middle; cursor: pointer;" @if($taikhoan->GIOITINH == true)
                                        {{"checked"}}
                                        @endif>
                                        <label>Nam</label><br>
                                        <input name="GIOITINH" type="radio" id="nu" value="0" style="vertical-align:middle; cursor: pointer;" @if($taikhoan->GIOITINH == false)
                                        {{"checked"}}
                                        @endif>
                                        <label>Nữ</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" id="EMAIL" name="EMAIL" class="form-control" value="{{$taikhoan->EMAIL}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Loại tài khoản</label>
                                <select name="LOAITK" id="LOAITK"  class="form-control" style="height:46px">
                                    @if ($taikhoan->LOAITK ==2)
                                    <option value="2">Giảng Viên</option>
                                    @else
                                    <option value="3">Admin</option>
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Hình ảnh</label>
                                <input type="file" id="ANH" name="ANH" class="form-control" onchange="imgchange(event)"></br>
                            </div>
                            @if($taikhoan->LOAITK==2)
                            <div class="form-group">
                                <label class="form-control-label">Chi tiết cá nhân</label>
                                <textarea rows="4" name="CTCANHAN" class="ckeditor form-control">{{$taikhoan->CTCANHAN}}</textarea>
                            </div>
                            @endif
                        </div>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <label id="lbl"></label>
                                <button type="submit" class="btn btn-default">Lưu</button>
                                @if($taikhoan->LOAITK==2)
                                <a href="admin/chungchi/{{$taikhoan->ID}}" class="btn btn-primary">Thêm chứng chỉ</a>
                                @endif
                            </div>
                        </div>
                        @if($taikhoan->LOAITK==2)
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="tencc">Học vị</th>
                                        <th scope="col" class="sort" data-sort="anhcc">Ảnh chứng chỉ</th>
                                        <th scope="col" class="sort" data-sort=""></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($chungchi as $cc)
                                    <tr>
                                        <th scope="row">
                                            {{$cc->HOCVI}}
                                        </th>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <img src="./images/{{$cc->ANHCHUNGCHI}}" Width="120px" Height="100px">
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <a href="admin/chungchi/sua/{{$taikhoan->ID}}&macc={{$cc->MACHUNGCHI}}" class="edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                            <a href="admin/chungchi/xoa/{{$taikhoan->ID}}&macc={{$cc->MACHUNGCHI}}" class="delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa tài khoản này?')"><i class="material-icons">&#xE872;</i></a>
                                        </th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
