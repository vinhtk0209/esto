@extends('admin.layout.index')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Tài Khoản</h3>
                    <div class="col-lg-6 col-5 text-right">
                    <a href="admin/taikhoan/them" class="btn btn-sm btn-neutral">Thêm</a>
                </div>
                    
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="hoten">Họ Tên</th>
                                <th scope="col" class="sort" data-sort="ngaysinh">Ngày Sinh</th>
                                <th scope="col" class="sort" data-sort="gioitinh">Giới Tính</th>
                                <th scope="col" class="sort" data-sort="sdt">SĐT</th>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="email">###</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($taikhoan as $tk)
                            <tr>
                                <td class="budget">
                                    {{$tk->HOTEN}}
                                </td>
                                <td class="budget">
                                    {{$tk->NGAYSINH}}
                                </td>
                                
                                <td class="budget">
                                    {{$tk->GIOITINH}}
                                </td>
                                <td class="budget">
                                    {{$tk->SODIENTHOAI}}
                                </td>
                                <td class="budget">
                                    {{$tk->EMAIL}}
                                </td>
                                <td class="budget">
                                <button type="button"> khóa</button>
                                <button type="button"> xóa </button>
                                </td>
                                
                                
                                @endforeach
                        </tbody>
                    </table>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
@endsection
