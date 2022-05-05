@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/hoadon/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/hoadon/">Quản Lý Hóa Đơn</a></li>
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
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0 text-blue">
                    <h3 class="mb-0">Hóa Đơn</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="">Mã hóa đơn</th>
                                <th scope="col" class="sort" data-sort="">Ngày Lập</th>
                                <th scope="col" class="sort" data-sort="">Tổng Tiền</th>
                                <th scope="col" class="sort" data-sort="">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($hoadon as $hd)
                            <tr>
                                <td class="budget">
                                    {{$hd->MAHD}}
                                </td>
                                <td class="budget">
                                    {{$hd->NGAYHD}}
                                </td>
                                <td class="budget">
                                    @php $tien = 0 @endphp
                                    @foreach ($khoahoc->where('MAHD', $hd->MAHD) as $kh)
                                    @php
                                        $tien+= \App\Models\Khoahoc::find($kh->MAKH)->DONGIA
                                    @endphp
                                    @endforeach
                                    {{$tien}}
                                </td>
                                <td class="">
                                    <a href="admin/hoadon/chitiet/{{$hd->MAHD}}" class="edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                </td>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                @if ($hoadon->lastPage() != 1)
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="admin/hoadon?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($hoadon->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$hoadon->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($hoadon->currentPage() == $hoadon->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$hoadon->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/hoadon?page={{$hoadon->lastPage()}}">
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
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 577eb96a6b8fad1fb97d3474ca546d67eeba4307
