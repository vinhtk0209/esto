@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/cauhoi/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/cauhoi/">Quản Lý Lớp Học</a></li>
                            <li class="breadcrumb-item"><a href="admin/cauhoi/them">Thêm Lớp Học</a></li>
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
                            <a href="admin/cauhoi/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/baithi/them/{{$id}}/cauhoi/sua/{{$mach}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin lớp học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Môn học</label>
                                <select name="MADM" id="MADM">
                                    @foreach($danhmuc as $dm)
                                    <option value="{{ $dm->MADM }}">{{ $dm->TENDM }}
                                    <option @if($cauhoi->MADM == $dm->MADM)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $dm->MADM }}">{{ $dm->TENDM }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Nội dung</label>
                                <textarea type="text" id="NOIDUNG" name="NOIDUNG" class="ckeditor form-control">{{$cauhoi->NOIDUNG}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu A</label>
                                <input type="text" id="A" name="A" class="form-control" value="{{$cauhoi->A}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu B</label>
                                <input type="text" id="B" name="B" class="form-control" value="{{$cauhoi->B}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu C</label>
                                <input type="text" id="C" name="C" class="form-control" value="{{$cauhoi->C}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu D</label>
                                <input type="text" id="D" name="D" class="form-control" value="{{$cauhoi->D}}">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Đáp án</label>
                                <select name="CAUDUNG" id="CAUDUNG">
                                    <option value="A" @if($cauhoi->CAUDUNG == 'A')
                                        {{"selected"}}
                                        @endif>A
                                    </option>
                                    <option value="B" @if($cauhoi->CAUDUNG == 'B')
                                        {{"selected"}}
                                        @endif>B
                                    </option>
                                    <option value="C" @if($cauhoi->CAUDUNG == 'C')
                                        {{"selected"}}
                                        @endif>C
                                    </option>
                                    <option value="D" @if($cauhoi->CAUDUNG == 'D')
                                        {{"selected"}}
                                        @endif>D
                                    </option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="luu" class="btn btn-primary">Lưu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection