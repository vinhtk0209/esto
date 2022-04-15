@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/danhgia/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/danhgia/">Quản Lý Đánh Giá</a></li>
                        </ol>
                    </nav>
                </div>

            </div>
            <div>

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
                    <h3 class="mb-0">Đánh Giá</h3>
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
                                <th scope="col" class="sort" data-sort="khoahoc">Khóa Học</th>
                                <th scope="col" class="sort" data-sort="options"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($khoahoc as $kh)
                            <tr>
                                <td class="budget">
                                    {{$kh->TENKH}}
                                </td>
                                <td class="budget">
                                    <div class="col-lg-6 col-5 text">
                                        <a href="admin/danhgia/ctdanhgia/{{$kh->MAKH}}" class="btn btn-sm btn-neutral">Xem chi tiết</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($khoahoc->lastPage() != 1)
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="admin/danhgia?page=1">
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
                            <a class="page-link" href="admin/hocvien?page={{$khoahoc->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection