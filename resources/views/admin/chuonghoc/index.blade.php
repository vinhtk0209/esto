@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/chuonghoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/chuonghoc/">Quản Lý Chương Học</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#formchuonghoc" data-whatever="@mdo">Thêm</button>
                </div>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0 text-blue">
                    <h3 class="mb-0">Chương học</h3>
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
                                <th scope="col" class="sort" data-sort="siso">Khóa học</th>
                                <th scope="col" class="sort" data-sort="tenlop">Chương học</th>
                                <th scope="col" class="sort" data-sort="options"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($chuonghoc as $ch)
                            <tr>
                                <td class="budget">
                                    {{$ch->rKhoaHoc->TENKH}}
                                </td>
                                <td class="budget">
                                    {{$ch->TENCHUONG}}
                                </td>
                                <td class="left">
                                    <button type="button" data-toggle="modal" data-target="#formchuonghoc" data-whatever="@mdo" name="edit" id="{{$ch->MACHUONG}}" class="btn btn-sm btn-neutral edit text-yellow" title="Edit"><i class="material-icons">&#xE254;</i></button>
                                    <a href="admin/chuonghoc/xoa/{{$ch->MACHUONG}}" class="btn btn-sm btn-neutral delete text-red" title="Delete" data-toggle="tooltip" onclick="return confirm('Bạn có muốn xóa mục này?')"><i class="material-icons">&#xE872;</i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0" id="paginate">
                        <li class="page-item">
                            <a class="page-link" href="admin/chuonghoc?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($chuonghoc->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$chuonghoc->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($chuonghoc->currentPage() == $chuonghoc->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$chuonghoc->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="admin/chuonghoc?page={{$chuonghoc->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Form Them bai hoc -->
<form method="POST" action="admin/chuonghoc/them" id="sample_form_chuonghoc" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="formchuonghoc" tabindex="-1" role="dialog" aria-labelledby="formchuonghocLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formchuonghocLabel">Thêm chương học</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-control-label">Khóa học</label>
                        <select id="MAKHchuong" name="MAKH">
                            <option value="">--------------------Khóa học--------------------</option>
                            @foreach($khoahoc as $kh)
                            <option value="{{ $kh->MAKH }}">{{ $kh->TENKH }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Tên chương</label>
                        <input type="text" id="TENCHUONG" name="TENCHUONG" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" id="luu" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection