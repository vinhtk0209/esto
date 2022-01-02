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
                                <input type="text" name="TENBT" class="form-control">
                            </div>
                        </div>
                        @if ($id == -2)
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài thi</label>
                                <input type="text" name="TENBT" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Thời gian bắt đầu</label>
                                <input type="datetime-local" name="TGBD" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Thời gian kết thúc</label>
                                <input type="datetime-local" name="TGKT" class="form-control">
                            </div>
                        </div>
                        @endif
                        <div class="row align-items-center">
                            <button type="submit" class="btn btn-default">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Danh sach bai thi -->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <!-- Card header -->
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Câu hỏi</h3>
                </div>
                <div class="col-4 text-right">
                    <div class="row">
                        <a href="admin/baithi/them/{{$id}}/nganhangcauhoi" class="btn btn-sm btn-neutral">Lấy từ ngân hàng câu hỏi</a>
                        <a href="admin/baithi/them/{{$id}}/cauhoi" class="btn btn-sm btn-neutral">Thêm câu hỏi</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="tenbaihoc">Câu hỏi</th>
                        <th scope="col" class="sort" data-sort="video">Câu A</th>
                        <th scope="col" class="sort" data-sort="hocthu">Câu B</th>
                        <th scope="col" class="sort" data-sort="video">Câu C</th>
                        <th scope="col" class="sort" data-sort="hocthu">Câu D</th>
                        <th scope="col" class="sort" data-sort="hocthu">Đáp án</th>
                        <th scope="col" class="sort" data-sort="options"></th>
                    </tr>
                </thead>
                <tbody class="list" id="listcauhoi">
                    @foreach($cauhoi as $ch)
                    <tr>
                        <td class="budget">
                            {{$ch->NOIDUNG}}
                        </td>
                        <td class="budget">
                            {{$ch->A}}
                        </td>
                        <td class="budget">
                            {{$ch->B}}
                        </td>
                        <td class="budget">
                            {{$ch->C}}
                        </td>
                        <td class="budget">
                            {{$ch->D}}
                        </td>
                        <td class="budget">
                            {{$ch->CAUDUNG}}
                        </td>
                        <td class="budget">
                            <a href="admin/baithi/them/{{$id}}/cauhoi/sua/{{$ch->MACH}}" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="admin/baithi/them/{{$id}}/cauhoi/xoa/{{$ch->MACH}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection