@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/lophoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/lophoc/">Quản Lý Lớp Học</a></li>
                            <li class="breadcrumb-item"><a href="admin/lophoc/them">Thêm Lớp Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6 ">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Thêm lớp học</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/lophoc/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/lophoc/them" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin lớp học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        @if ($check == 0) <div class="alert alert-danger">Chưa có khóa học trực tuyến nào!</div>
                        @else
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Khóa học</label></br>
                                        <select name="MAKH" class="form-control" style="height:46px">
                                            @foreach($khoahoc as $kh)
                                            <option value="{{ $kh->MAKH }}">{{ $kh->TENKH }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tên lớp học</label>
                                        <input type="text" name="TENLOP" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập tên lớp học')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Số học viên tối đa</label>
                                        <input type="number" name="SLGIOIHAN" class="form-control" min="5" max="100" required oninvalid="this.setCustomValidity('5 <= Số lượng học viên <= 100')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Thời gian mở lớp</label></br>
                                        <input type="datetime-local" name="NGAYMOLOP" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập ngày mở lớp')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <button type="submit" class="btn btn-default">Thêm lớp học</button>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
