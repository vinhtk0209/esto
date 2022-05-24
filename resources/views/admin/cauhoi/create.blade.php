@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/baithi/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/">Quản Lý Bài Thi</a></li>
                            @if (session('mabt') == null)
                            <li class="breadcrumb-item"><a href="admin/baithi/them/{{$id}}">Thêm Bài Thi</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/them/{{$id}}/chitiet">Chi tiết</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/{{$id}}/cauhoi">Thêm Câu Hỏi</a></li>
                            @else
                            <li class="breadcrumb-item"><a href="admin/baithi/sua/{{$id}}">Sửa Bài Thi</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/{{$id}}/cauhoi">Thêm Câu Hỏi</a></li>
                            @endif
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
                            <h3 class="mb-0">Thêm câu hỏi</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{session('mabt') != null ? 'admin/baithi/them/'.$id.'/chitiet' : ($id > 0 ? 'admin/baithi/sua/'.$id : 'admin/baithi/them/'.$id)}}" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/baithi/{{$id}}/cauhoi" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin câu hỏi</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Môn học</label>
                                <select name="MADM" id="MADM" class="form-control" style="height:46px">
                                    @foreach($danhmuc as $dm)
                                    <option value="{{ $dm->MADM }}">{{ $dm->TENDM }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Nội dung</label>
                                <textarea type="text" id="NOIDUNG" name="NOIDUNG" class="ckeditor form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu A</label>
                                <input type="text" id="A" name="A" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập nội dung câu A')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu B</label>
                                <input type="text" id="B" name="B" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập nội dung câu B')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu C</label>
                                <input type="text" id="C" name="C" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập nội dung câu C')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Câu D</label>
                                <input type="text" id="D" name="D" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập nội dung câu D')" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Đáp án</label>
                                <select name="CAUDUNG" id="CAUDUNG" class="form-control" style="height:46px">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
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
