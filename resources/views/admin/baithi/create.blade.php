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
                            <li class="breadcrumb-item"><a href="admin/baithi/them">Thêm Bài Thi</a></li>
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
                            <h3 class="mb-0">Thêm bài thi</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/baithi/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/baithi/them/{{$id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin bài thi</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        @if (session('mabt') != null)
                        @if ($baithi->TGBD == "")
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Khóa học</label></br>
                                <select id="MAKHbaithi" name="MAKHbaithi">
                                    <option value="">--------------------Khóa học--------------------</option>
                                    @foreach($khoahoc as $kh)
                                    <option @if($baihoc[0]->MAKH == $kh->MAKH)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $kh->MAKH }}">{{ $kh->TENKH }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Bài học</label></br>
                                <select id="MABH" name="MABH">
                                    @foreach($baihoc as $bh)
                                    <option @if($baihoc[0]->MABH == $bh->MABH)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $bh->MABH }}">{{ $bh->TENBH }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài thi</label>
                                <input type="text" name="TENBT" class="form-control" value="{{$baithi->TENBT}}">
                            </div>
                        </div>
                        <div id="dtructuyen" @if($baithi->TGBD == "")
                            {{"style=display:none"}}
                            @endif>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian bắt đầu</label>
                                    <input type="datetime-local" name="TGBD" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($baithi->TGBD)) }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian kết thúc</label>
                                    <input type="datetime-local" name="TGKT" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($baithi->TGKT)) }}">
                                </div>
                            </div>
                        </div>
                        @else
                        @if ($id == -1)
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Khóa học</label></br>
                                <select id="MAKHbaithi" name="MAKHbaithi">
                                    <option value="">--------------------Khóa học--------------------</option>
                                    @foreach($khoahoc as $kh)
                                    <option value="{{ $kh->MAKH }}">{{ $kh->TENKH }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                        <div class="pl-lg-4" id="dbaihoc" name="dbaihoc">
                        </div>
                        <div id="dtenbaithi" class="pl-lg-4" style="display:none">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài thi</label>
                                <input type="text" id="TENBT" name="TENBT" class="form-control" oninvalid="this.setCustomValidity('Bạn chưa nhập tên bài thi')" oninput="this.setCustomValidity('')" @if($id==-1) {{"required"}} @endif>
                            </div>
                        </div>
                        @if ($id == -2)
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài thi</label>
                                <input type="text" name="TENBT" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập tên bài thi')" oninput="this.setCustomValidity('')" @if($id==-2) {{"required"}} @endif>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Thời gian bắt đầu</label>
                                <input type="datetime-local" name="TGBD" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập thời gian bắt đầu')" oninput="this.setCustomValidity('')" @if($id==-2) {{"required"}} @endif>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Thời gian kết thúc</label>
                                <input type="datetime-local" name="TGKT" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập thời gian kết thúc')" oninput="this.setCustomValidity('')" @if($id==-2) {{"required"}} @endif>
                            </div>
                        </div>
                        @endif
                        @endif
                        <div class="row align-items-right">
                            <button type="submit" class="btn btn-default">Tiếp</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection