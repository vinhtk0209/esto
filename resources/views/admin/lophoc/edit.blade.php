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
                            <li class="breadcrumb-item"><a href="admin/lophoc/sua/{{$lophoc->MALH}}">Sửa Lớp Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">        
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Sửa lớp học</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/lophoc/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/lophoc/sua/{{$lophoc->MALH}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin lớp học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tên lớp học</label>
                                        <input type="text" name="TENLOP" class="form-control" value="{{$lophoc->TENLOP}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Số học viên tối đa</label>
                                        <input type="text" name="SLGIOIHAN" class="form-control" value="{{$lophoc->SLGIOIHAN}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Khóa học</label></br>
                                        <select name="MAKH">
                                            @foreach($khoahoc as $kh)
                                            <option @if($lophoc->MAKH == $kh->MAKH)
                                                {{"selected"}}
                                                @endif
                                                value="{{$kh->MAKH}}">{{ $kh->TENKH }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Ngày mở lớp</label></br>
                                        <input type="datetime-local" name="NGAYMOLOP" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($lophoc->NGAYMOLOP)) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <button type="submit" class="btn btn-default">Sửa</button>
                            </div>
                            <div class="col-4 text-right">
                                <a href="admin/lophoc/" id="lophoc" class="btn btn-primary">Thêm bài học</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection