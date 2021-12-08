@extends('admin.layout.index')
@section('content')
<<<<<<< HEAD
=======
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/taikhoan/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/taikhoan/">Quản Lý Tài Khoản</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="admin/taikhoan/them" class="btn btn-sm btn-neutral">Thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> 73bb0f0cc0ee6127ed3b5d313609b4322282e27b
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
<<<<<<< HEAD
                <div class="card-header border-0">
                    <h3 class="mb-0">Tài Khoản</h3>
                    <div class="col-lg-6 col-5 text-right">
                    <a href="admin/taikhoan/them" class="btn btn-sm btn-neutral">Thêm</a>
                </div>
                    
                </div>
=======
                <div class="card-header border-0 text-blue">
                    <h3 class="mb-0">Tài khoản</h3>
                </div>
                @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
>>>>>>> 73bb0f0cc0ee6127ed3b5d313609b4322282e27b
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
<<<<<<< HEAD
                                <th scope="col" class="sort" data-sort="hoten">Họ Tên</th>
                                <th scope="col" class="sort" data-sort="ngaysinh">Ngày Sinh</th>
                                <th scope="col" class="sort" data-sort="gioitinh">Giới Tính</th>
                                <th scope="col" class="sort" data-sort="sdt">SĐT</th>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="email">###</th>
=======
                                <th scope="col" class="sort" data-sort="hoten">Họ và tên</th>
                                <th scope="col" class="sort" data-sort="ngaysinh">Ngày sinh</th>
                                <th scope="col" class="sort" data-sort="gioitinh">Giới tính</th>
                                <th scope="col" class="sort" data-sort="sodienthoai">Số điện thoại</th>
                                <th scope="col" class="sort" data-sort="email">Email</th>
                                <th scope="col" class="sort" data-sort="trangthai">Trạng thái</th>
                                <th scope="col" class="sort" data-sort="options"></th>
>>>>>>> 73bb0f0cc0ee6127ed3b5d313609b4322282e27b
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
<<<<<<< HEAD
                                
                                <td class="budget">
                                    {{$tk->GIOITINH}}
=======
                                <td class="budget">
                                    {{$tk->GIOITINH==1?'Nam':'Nữ'}}
>>>>>>> 73bb0f0cc0ee6127ed3b5d313609b4322282e27b
                                </td>
                                <td class="budget">
                                    {{$tk->SODIENTHOAI}}
                                </td>
                                <td class="budget">
                                    {{$tk->EMAIL}}
                                </td>
                                <td class="budget">
<<<<<<< HEAD
                                <button type="button"> khóa</button>
                                <button type="button"> xóa </button>
                                </td>
                                
                                
                                @endforeach
                        </tbody>
                    </table>
                </div>
                
                
=======
                                    {{$tk->TRANGTHAI==1?'Hoạt động':'Vô hiệu hóa'}}
                                </td>
                                <td class="center">
                                    <a href="admin/taikhoan/sua/{{$tk->ID}}" class="edit text-yellow" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                    <a href="admin/taikhoan/xoa/{{$tk->ID}}" class="delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
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
                            <a class="page-link" href="admin/taikhoan?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($taikhoan->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$taikhoan->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($taikhoan->currentPage() == $taikhoan->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$taikhoan->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/taikhoan?page={{$taikhoan->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                    </nav>
                </div>
>>>>>>> 73bb0f0cc0ee6127ed3b5d313609b4322282e27b
            </div>
        </div>
    </div>
</div>
@endsection
