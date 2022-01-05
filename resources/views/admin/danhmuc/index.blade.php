@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/danhmuc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/danhmuc/">Quản Lý Danh Mục</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="admin/danhmuc/them" class="btn btn-sm btn-neutral">Thêm</a>
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
                    <h3 class="mb-0">Danh Mục</h3>
                </div>
                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif

                @if (Session::has('failed'))
                <div class="alert alert-danger">
                    {{Session::get('failed')}}
                </div>
                @endif


                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort">Tên Danh Mục</th>
                                <th scope="col" class="sort">Trạng Thái</th>
                                <th scope="col" class="sort text-center">Update</th>
                                <th scope="col" class="sort"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        {!! \App\Helpers\Helper::cate($cateList) !!}
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                    {{-- <div class="card-footer py-4">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item">
                                <a class="page-link" href="admin/danhmuc?page=1">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                            </li>
                            @if ($cateList->currentPage() == 1)
                            <li class="page-item disabled">
                                @else
                            <li class="page-item">
                                @endif
                                <a class="page-link" href="{{$cateList->previousPageUrl()}}">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            @if ($cateList->currentPage() == $cateList->lastPage())
                            <li class="page-item disabled">
                                @else
                            <li class="page-item">
                                @endif
                                <a class="page-link" href="{{$cateList->nextPageUrl()}}">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="admin/danhmuc?page={{$cateList->lastPage()}}">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
