@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/khoahoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/">Quản Lý Khóa Học</a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/them">Thêm Bài Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">
    <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="public/images/{{$khoahoc->ANH}}" alt="Image placeholder" class="card-img-top">
                <div class="course-des">
                    <div class="name-course">
                        <h4>{{$khoahoc->TENKH}}</h4>
                    </div>
                    <div class="name-teacher d-flex flex-space">
                        <p class="">Giang Vien</p>
                        <div class="price price-discount">
                            <p><del>{{$khoahoc->DONGIA}}</del><span class="price-unit"><sup>vnd</sup></span></p>
                        </div>
                    </div>
                    <div class="price-course d-flex flex-space">
                        <div class="rate">
                            <p>
                                <span class="star-rate">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                </span>
                            </p>
                        </div>
                        <p>{{$khoahoc->DONGIA}}<span class="price-unit"><sup>vnd</sup></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Thêm bài học</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/baihoc/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/baihoc/them?id=$khoahoc->MAKH" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin khóa học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Tên bài học</label>
                                <input type="text" name="TENBH" class="form-control">
                            </div>
                        </div>
                        <div id="dvideo">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Video</label>
                                        <input type="file" id="VIDEO" name="VIDEO" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Học thử</label></br>
                                        <input name="type" type="radio" id="internal" value="internal" style="vertical-align:middle; cursor: pointer;">
                                        <label for="internal">có</label><br>
                                        <input name="type" type="radio" id="global" value="global" style="vertical-align:middle; cursor: pointer;" checked>
                                        <label for="global">không</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="dtructuyen" style="display: none;">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Tên lớp học</label>
                                    <input type="text" name="TENLH" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Số lượng học viên</label>
                                    <input type="text" name="SLGIOIHAN" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-username">Ngày mở lớp</label>
                                    <input type="date" name="NGAYMOLOP" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Link lớp học</label>
                                    <input type="text" placeholder="https://meet.google.com/gwr-fkvv-jjj" id="LINK" name="LINK" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian bắt đầu</label>
                                    <input type="datetime-local" name="TGBD" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-email">Thời gian kết thúc</label>
                                    <input type="datetime-local" name="TGKT" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <button type="submit" class="btn btn-default">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection