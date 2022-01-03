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
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#formloaibaithi" data-whatever="@mdo">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="col-lg-6 col-5 text-left">
        <a href="admin/baithi/search=0" class="btn btn-sm btn-neutral @if($id != 1) active @endif">Video</a>
        <a href="admin/baithi/search=1" class="btn btn-sm btn-neutral @if($id == 1) active @endif">Trực tuyến</a>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0 text-blue">
                    <h3 class="mb-0">Bài thi</h3>
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <!-- Light table -->
                @if ($id == 0)
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="siso">Tên bài thi</th>
                                <th scope="col" class="sort" data-sort="tenlop">Giảng viên</th>
                                <th scope="col" class="sort" data-sort="options"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($baithi as $bt)
                            <tr>
                                <td class="budget">
                                    {{$bt->TENBT}}
                                </td>
                                <td class="budget">
                                    {{$bt->rTaiKhoan->HOTEN}}
                                </td>
                                <td class="budget">
                                    <a href="admin/baithi/sua/{{$bt->MABT}}" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="admin/baithi/xoa/{{$bt->MABT}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="admin/baithi/search=0?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($baithi->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$baithi->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($baithi->currentPage() == $baithi->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$baithi->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/baithi/search=0?page={{$baithi->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                    </nav>
                </div>
                @else
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="ngaymolop">Tên bài thi</th>
                                <th scope="col" class="sort" data-sort="tenlop">Thời gian bắt đầu</th>
                                <th scope="col" class="sort" data-sort="siso">Thời gian kết thúc</th>
                                <th scope="col" class="sort" data-sort="ngaymolop">Giảng viên</th>
                                <th scope="col" class="sort" data-sort="options"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($baithi as $bt)
                            <tr>
                                <td class="budget">
                                    {{$bt->TENBT}}
                                </td>
                                <td class="budget">
                                    {{$bt->TGBD}}
                                </td>
                                <td class="budget">
                                    {{$bt->TGKT}}
                                </td>
                                <td class="budget">
                                    {{$bt->rTaiKhoan->HOTEN}}
                                </td>
                                <td class="budget">
                                    <a href="admin/baithi/sua/{{$bt->MABT}}" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="admin/baithi/xoa/{{$bt->MABT}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="admin/baithi/search=1?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($baithi->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$baithi->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($baithi->currentPage() == $baithi->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$baithi->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/baithi/search=1?page={{$baithi->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                    </nav>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-sm" id="formloaibaithi" tabindex="-1" role="dialog" aria-labelledby="formloaibaithiLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formloaibaithiLabel">Tạo bài thi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row ">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Chọn hình thức thi:</label>
                        <a href="admin/baithi/them/-1" class="btn btn-primary">Video</a>
                        <a href="admin/baithi/them/-2" class="btn btn-primary">Trực tuyến</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection