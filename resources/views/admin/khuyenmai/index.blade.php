@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/khuyenmai/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/khuyenmai/">Quản Lý Khuyến Mãi</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="admin/khuyenmai/them" class="btn btn-sm btn-neutral">Thêm</a>
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
                    <h3 class="mb-0">Khuyến Mãi</h3>
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                <br><br><br>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="">Tên Khuyến mãi</th>
                                <th scope="col" class="sort" data-sort="">Ngày bắt đầu</th>
                                <th scope="col" class="sort" data-sort="">Ngày kết thúc</th>
                                <th scope="col" class="sort" data-sort="">Trạng thái</th>
                                <th scope="col" class="sort" data-sort="">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($khuyenmai as $km)
                            <tr>
                                <td class="budget">
                                    {{$km->TENKM}}
                                </td>
                                <td class="budget">
                                    {{$km->NGAYBD}}
                                </td>
                                <td class="budget">
                                    {{$km->NGAYKT}}
                                </td>
                                <td class="budget">
                                    @if($km->MATT==1)
                                   <span class="text-warning"> Chưa áp dụng</span>
                                    @endif
                                    @if($km->MATT==2)
                                       <span class="text-success"> Đang áp dụng</span>
                                    @endif
                                    @if($km->MATT==3)
                                      <span class="text-danger">  Ngưng áp dụng</span>
                                    @endif
                                </td>
                                <td class="">
                                    <a href="admin/khuyenmai/sua/{{$km->MAKM}}" class="btn btn-sm btn-neutral edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="admin/khuyenmai/xoa/{{$km->MAKM}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="admin/khuyenmai?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($khuyenmai->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$khuyenmai->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($khuyenmai->currentPage() == $khuyenmai->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$khuyenmai->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/khuyenmai?page={{$khuyenmai->lastPage()}}">
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
