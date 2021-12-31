@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/khoahoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/">Quản Lý Khóa Học</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="admin/khoahoc/them" class="btn btn-sm btn-neutral">Thêm</a>
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
                    <h3 class="mb-0">Khóa học</h3>
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
                                <th scope="col" class="sort" data-sort="anh">Ảnh</th>
                                <th scope="col" class="sort" data-sort="khoahoc">Khóa học</th>
                                <th scope="col" class="sort" data-sort="gia">Giá</th>
                                <th scope="col" class="sort" data-sort="gioithieu">Giới thiệu</th>
                                <th scope="col" class="sort" data-sort="loai">Môn học</th>
                                <th scope="col" class="sort" data-sort="loai">Hình thức</th>
                                <th scope="col" class="sort" data-sort="options"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="listKH">
                            @foreach($khoahoc as $kh)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <img src="./user/assets/imgCourse/{{$kh->ANH}}" width="90px" height="50px">
                                    </div>
                                </th>
                                <td class="budget">
                                    {{substr($kh->TENKH, 0, 30)}}..
                                </td>
                                <td class="budget">
                                    {{$kh->DONGIA}}
                                </td>
                                <td class="budget">
                                    {{substr($kh->GIOITHIEUKH, 0, 50)}}...
                                </td>
                                <td class="budget">
                                    {{$kh->rDanhMuc->TENDM}}
                                </td>
                                <td class="budget">
                                    {{$kh->TRUCTUYEN==1?'Trực tuyến':'Video'}}
                                </td>
                                <td class="budget">
                                    <a href="admin/khoahoc/sua/{{$kh->MAKH}}" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="admin/khoahoc/xoa/{{$kh->MAKH}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
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
                            <a class="page-link" href="admin/khoahoc?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($khoahoc->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$khoahoc->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($khoahoc->currentPage() == $khoahoc->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$khoahoc->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/khoahoc?page={{$khoahoc->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
