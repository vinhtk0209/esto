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
                            <li class="breadcrumb-item"><a href="admin/hoadon/chitiet/{{$detail[0]->MAHD}}">Chi tiết hóa đơn</a></li>
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
                        <div class="col-8 text-blue">
                            <h3 class="mb-0">Chi tiết hóa đơn</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/hoadon" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>                
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8 text-blue">
                            <h5 class="mb-0">Học viên: {{$tenHV[0]->HOTEN}}</h5>
                        </div>
                        <div class="col-4 text-right">
                            <h5>Tổng tiền: {{number_format($tien)}} VNĐ</h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">                            
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="">Khóa học</th>
                                <th scope="col" class="sort" data-sort="">Giảng viên</th>
                                <th scope="col" class="sort" data-sort="">Ngày lập</th>
                                <th scope="col" class="sort" data-sort="">Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($detail as $dt)
                            <tr>                                
                                <td class="budget">
                                    {{$dt->TENKH}}
                                </td>
                                <td class="budget">
                                    {{$dt->HOTEN}}
                                </td>
                                <td class="budget">
                                    {{$dt->NGAYHD}}
                                </td>
                                <td class="budget">
                                    {{number_format($dt->DONGIA)}} VNĐ
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
@endsection