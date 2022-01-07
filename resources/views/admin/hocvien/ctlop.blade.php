@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/hocvien/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/hocvien/">Quản Lý Lớp Học</a></li>
                            <li class="breadcrumb-item"><a href="admin/hocvien/ctlop/{{$id}}">Chi Tiết Lớp Học</a></li>
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
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Chi tiết lớp học {{$lophoc->TENLOP}}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/hocvien/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
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
                                <th scope="col" class="sort" data-sort="hoten">Họ Tên</th>
                                <th scope="col" class="sort" data-sort="ngaysinh">Ngày Sinh</th>
                                <th scope="col" class="sort" data-sort="gioitinh">Giới Tính</th>
                                <th scope="col" class="sort" data-sort="gioitinh">Sđt</th>
                                <th scope="col" class="sort" data-sort="gioitinh">Email</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($ctlophoc as $ctlh)
                            <tr>
                                <td class="budget">
                                    {{$ctlh->rTaiKhoan->HOTEN}}
                                </td>
                                <td class="budget">
                                    {{$ctlh->rTaiKhoan->NGAYSINH}}
                                </td>
                                <td class="budget">
                                    {{$ctlh->rTaiKhoan->GIOITINH==1?'Nam':'Nữ'}}
                                </td>
                                <td class="budget">
                                    {{$ctlh->rTaiKhoan->SODIENTHOAI}}
                                </td>
                                <td class="budget">
                                    {{$ctlh->rTaiKhoan->EMAIL}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection