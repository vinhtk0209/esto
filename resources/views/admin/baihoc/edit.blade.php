@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/baihoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/baihoc/">Quản Lý Bài Học</a></li>
                            <li class="breadcrumb-item"><a href="{{($baihoc[0]->TRUCTUYEN==0)?('admin/baihoc/sua/bh='.$baihoc[0]->MABH.'&lh=0'):('admin/baihoc/sua/bh='.$baihoc[0]->MABH.'&lh='.$baihoc[0]->MALH)}}">Sửa Bài Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Sửa bài học</h3>
                        </div>
                        <div class="col-4 text-right">
                            @if($baihoc[0]->TRUCTUYEN == false)
                            <a href="admin/baihoc/" class="btn btn-sm btn-primary">Quay lại</a>
                            @else <a href="admin/baihoc/search=1" class="btn btn-sm btn-primary">Quay lại</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{($baihoc[0]->TRUCTUYEN==0)?('admin/baihoc/sua/bh='.$baihoc[0]->MABH.'&lh=0'):('admin/baihoc/sua/bh='.$baihoc[0]->MABH.'&lh='.$baihoc[0]->MALH)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin bài học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Khóa học</label></br>
                                <select id="MAKH" name="MAKH" disabled class="form-control" style="height:46px">
                                    <option value="">--------------------Khóa học--------------------</option>
                                    @foreach($khoahoc as $kh)
                                    @if ($baihoc[0]->TRUCTUYEN == true)
                                    <option @if($baihoc[0]->MAKH == $kh->MAKH)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $kh->MAKH }}">{{ $kh->TENKH }}
                                    </option>
                                    @else
                                    <option @if($baihoc[0]->rChuongHoc->MAKH == $kh->MAKH)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $kh->MAKH }}">{{ $kh->TENKH }}
                                    </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if ($baihoc[0]->TRUCTUYEN == true)
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Lớp học</label></br>
                                <select name="MALH" disabled class="form-control" style="height:46px">
                                    @foreach ($lophoc as $lh)
                                    <option @if($baihoc[0]->MALH == $lh->MALH)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $lh->MALH }}">{{ $lh->TENLOP }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Chương</label></br>
                                <select name="MACHUONG" class="form-control" style="height:46px">
                                    @foreach ($chuonghoc as $ch)
                                    <option @if($baihoc[0]->MACHUONG == $ch->MACHUONG)
                                        {{"selected"}}
                                        @endif
                                        value="{{ $ch->MACHUONG }}">{{ $ch->TENCHUONG }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="pl-lg-4" id="dqlchuonghoc" name="dqlchuonghoc" style="display:none">
                            <a href="admin/chuonghoc/" class="btn btn-sm btn-primary">Chương học</a>
                        </div>
                        <div id="" class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài học</label>
                                <input type="text" name="TENBH" class="form-control" value="{{$baihoc[0]->TENBH}}" required oninvalid="this.setCustomValidity('Bạn chưa nhập tên bài học')" oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                        <div id="dvideo" @if($baihoc[0]->TRUCTUYEN == true)
                            {{"style=display:none"}}
                            @endif>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Video</label>
                                    <input type="text" name="title" class="form-control" placeholder="Tên video" />
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Mô tả</label>
                                    <textarea id="description" name="description" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="pl-lg-4">
                                <div class="form-group">
                                    <input type="file" id="VIDEO" name="VIDEO" class="form-control" oninvalid="this.setCustomValidity('Bạn chưa nhập video')" oninput="this.setCustomValidity('')">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#formvideo" data-whatever="@mdo">Xem video</button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Học thử</label></br>
                                    <input name="HOCTHU" type="radio" id="co" value="1" style="vertical-align:middle; cursor: pointer;">
                                    <label>Có</label><br>
                                    <input name="HOCTHU" type="radio" id="khong" value="0" style="vertical-align:middle; cursor: pointer;" checked>
                                    <label>Không</label>
                                </div>
                            </div>
                        </div>
                        <div id="dtructuyen" @if($baihoc[0]->TRUCTUYEN == false)
                            {{"style=display:none"}}
                            @endif>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Link lớp học</label>
                                    <input type="url" placeholder="https://meet.google.com/gwr-fkvv-jjj" id="LINK" name="LINK" class="form-control" value="{{$baihoc[0]->LINK}}" oninvalid="this.setCustomValidity('Bạn chưa nhập link bài học')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian bắt đầu</label>
                                    <input type="datetime-local" id="TGBD" name="TGBD" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($baihoc[0]->TGBD)) }}" oninvalid="this.setCustomValidity('Bạn chưa nhập thời gian bắt đầu')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian kết thúc</label>
                                    <input type="datetime-local" id="TGKT" name="TGKT" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($baihoc[0]->TGKT)) }}" oninvalid="this.setCustomValidity('Bạn chưa nhập thời gian kết thúc')" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <button type="submit" class="btn btn-default">Sửa</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="formvideo" tabindex="-1" role="dialog" aria-labelledby="formvideoLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 65%;" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <iframe width="853" height="480" src="{{$baihoc[0]->VIDEO}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
