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
                            <li class="breadcrumb-item"><a href="admin/danhgia/ctdanhgia/{{$id}}">Chi Tiết Đánh Giá</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Chi tiết đánh giá của khóa học {{$khoahoc->TENKH}}</h3>

                    </div>
                    <div class="col-4 text-right">
                        <a href="admin/danhgia/" class="btn btn-sm btn-primary">Quay lại</a>
                    </div>
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
                                <th scope="col" class="sort" data-sort="hoten">Người đánh giá</th>
                                <th scope="col" class="sort" data-sort="sosao">Số sao</th>
                                <th scope="col" class="sort" data-sort="noidung">Nội dung</th>
                                <th scope="col" class="sort" data-sort="xoa"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($danhgia as $dg)
                            <tr>
                                <td class="budget">
                                    {{$dg->rTaiKhoan->HOTEN}}
                                </td>
                                <td class="budget" style="width:10%">
                                    {{$dg->SOSAO}}
                                </td>
                                <td class="budget">
                                    {{$dg->NOIDUNG}}
                                </td>
                                <td class="budget">
                                    <a href="admin/danhgia/xoa/{{$dg->MAHV}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa tài đánh giá này?')"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if ($danhgia->lastPage() != 1)
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="admin/danhgia/ctlop/{{$id}}?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($danhgia->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$danhgia->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($danhgia->currentPage() == $danhgia->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$danhgia->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/danhgia/ctlop/{{$id}}?page={{$danhgia->lastPage()}}">
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
</div>
@endsection