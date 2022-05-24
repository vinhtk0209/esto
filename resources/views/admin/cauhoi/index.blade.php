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
                            <li class="breadcrumb-item"><a href="admin/baithi/them/{{$id}}">Thêm Bài Thi</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/them/{{$id}}/chitiet">Chi tiết</a></li>
                            <li class="breadcrumb-item"><a href="admin/baithi/them/{{$id}}/nganhangcauhoi">Ngân Hàng Câu Hỏi</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <!-- Card header -->
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Câu hỏi</h3>
                </div>
                <div class="col-4 text-right">
                    <select id="MADMcauhoi" name="MADMcauhoi" class="form-control" style="height:46px">
                        <option value="-1">-----Môn học-----</option>
                        @foreach($danhmuc as $dm)
                        <option value="{{ $dm->MADM }}">{{ $dm->TENDM }}</option>
                        @endforeach
                    </select>
                    <a href="{{session('mabt') != null ? 'admin/baithi/them/'.$id.'/chitiet' : ($id > 0 ? 'admin/baithi/sua/'.$id : 'admin/baithi/them/'.$id)}}" class="btn btn-sm btn-primary">Quay lại</a>
                </div>
            </div>
        </div>
        <!-- Light table -->
        <div class="table-responsive">
            <form action="admin/baithi/{{$id}}/nganhangcauhoi" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="options"></th>
                            <th scope="col" class="sort" data-sort="tenbaihoc">Câu hỏi</th>
                            <th scope="col" class="sort" data-sort="video">Câu A</th>
                            <th scope="col" class="sort" data-sort="hocthu">Câu B</th>
                            <th scope="col" class="sort" data-sort="video">Câu C</th>
                            <th scope="col" class="sort" data-sort="hocthu">Câu D</th>
                            <th scope="col" class="sort" data-sort="hocthu">Đáp án</th>
                            <th scope="col" class="sort" data-sort="hocthu">Môn học</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="listnganhangcauhoi">
                        @foreach($cauhoi as $ch)
                        <tr>
                            <td class="budget">
                                <input type="checkbox" name="ids[]" value="{{$ch->MACH}}">
                            </td>
                            <td class="budget">
                                {{$ch->NOIDUNG}}
                            </td>
                            <td class="budget">
                                {{$ch->A}}
                            </td>
                            <td class="budget">
                                {{$ch->B}}
                            </td>
                            <td class="budget">
                                {{$ch->C}}
                            </td>
                            <td class="budget">
                                {{$ch->D}}
                            </td>
                            <td class="budget">
                                {{$ch->CAUDUNG}}
                            </td>
                            <td class="budget">
                                {{$ch->TENDM}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>
                                <div class="row align-items-center">
                                    <button type="submit" class="btn btn-default">Chọn</button>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
