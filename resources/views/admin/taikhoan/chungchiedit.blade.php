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
                            <li class="breadcrumb-item"><a href="admin/taikhoan/sua/{{$id}}">Sửa tài khoản</a></li>
                            <li class="breadcrumb-item"><a href="admin/taikhoan/sua/chungchi/sua/{{$id}}&macc={{$chungchi->MACHUNGCHI}}">Sửa chứng chỉ</a></li>
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
                <img src="public/images/image.png" id="anh" class="card-img-top" width="200px" height="250px">
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Sửa chứng chỉ</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/taikhoan/sua/{{$id}}" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/taikhoan/sua/chungchi/sua/{{$id}}&macc={{$chungchi->MACHUNGCHI}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin chứng chỉ</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <p id ="anh123" > </p>
                            <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Học vị</label>
                                <input type="text" id="HOCVI" name="HOCVI" class="form-control" value="{{$chungchi->HOCVI}}">
                             
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Ảnh chứng chỉ</label>
                                <input type="file" id="ANH13" name="ANHCC" class="form-control" onchange="imgchange(event)"></br>                                
                                
                            </div>
                        </div> 
                        <div class="row align-items-center">
                            <div class="col-8">
                                <label id="lbl"></label>
                                <button type="submit" class="btn btn-default">Sửa</button>
                                
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
