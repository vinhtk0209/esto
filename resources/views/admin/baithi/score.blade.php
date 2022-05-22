@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/baithi/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/">Quản Lý Bài Thi</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/dsdiem/{{$id}}">Quản Lý Điểm</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/dsdiem/{{$id}}/{{$mahv}}">Điểm học viên</a></li>
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
                    <h3 class="mb-0">Bài thi của học viên: {{$bailam->HOTEN}} - {{$diem}} Điểm</h3>
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
                                <th scope="col" class="sort" data-sort="siso">Câu hỏi</th>
                                <th scope="col" class="sort" data-sort="tenlop">Đáp án học viên</th>
                                <th scope="col" class="sort" data-sort="tenlop">Câu đúng</th>
                                <th scope="col" class="sort" data-sort="tenlop">Điểm</th>
                                <th scope="col" class="sort" data-sort="tenlop"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($baithi as $bt)
                            <tr>
                                <td class="budget">
                                    {{$bt->NOIDUNG}}
                                </td>
                                <td class="budget">
                                    @php($cautl = $ctbailam->where('MACH', $bt->MACH)->first())
                                    {{$cautl->DAPAN}}
                                </td>
                                <td class="budget">
                                    {{$bt->CAUDUNG}}
                                </td>
                                <td class="budget">
                                    {{$bt->DIEM}}
                                </td>
                                <td class="budget">
                                    @if ($cautl->DAPAN != $bt->CAUDUNG) Sai
                                    @endif
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
