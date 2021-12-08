@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/baihoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/baihoc/">Quản Lý Bài Học</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="admin/baihoc/them" class="btn btn-sm btn-neutral">Thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0 text-blue">
                    <h3 class="mb-0">Lớp học</h3>
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="tenlop">Tên lớp học</th>
                                <th scope="col" class="sort" data-sort="siso">Số học viên tối đa</th>
                                <th scope="col" class="sort" data-sort="ngaymolop">Ngày mở lớp</th>
                                <th scope="col" class="sort" data-sort="khoahoc">Khóa học</th>
                                <th scope="col" class="sort" data-sort="options"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($baihoc as $lh)
                            <tr>
                                <td class="budget">
                                    {{$lh->TENLOP}}
                                </td>
                                <td class="budget">
                                    {{$lh->SLGIOIHAN}}
                                </td>
                                <td class="budget">
                                    {{$lh->NGAYMOLOP}}
                                </td>
                                <td class="budget">
                                    {{$lh->rKhoaHoc->TENKH}}
                                </td>
                                <td class="center">
                                    <a href="admin/baihoc/sua/{{$lh->MALH}}" class="edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="admin/baihoc/xoa/{{$lh->MALH}}" class="delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
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
                            <a class="page-link" href="admin/baihoc?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($baihoc->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$baihoc->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($baihoc->currentPage() == $baihoc->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$baihoc->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/baihoc?page={{$baihoc->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection