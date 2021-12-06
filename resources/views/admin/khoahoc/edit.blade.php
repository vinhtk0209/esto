@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
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
                            <h3 class="mb-0">Sửa khóa học</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/khoahoc/" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="admin/khoahoc/sua/{{$khoahoc->MAKH}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin khóa học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tên khóa học</label>
                                        <input type="text" name="TENKH" class="form-control" value="{{$khoahoc->TENKH}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Giá khóa học</label>
                                        <input type="text" name="DONGIA" class="form-control" value="{{$khoahoc->DONGIA}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Môn học</label></br>
                                        <select name="MADM">
                                            @foreach($danhmuc as $dm)
                                            <option @if($khoahoc->MADM == $dm->MADM)
                                                {{"selected"}}
                                                @endif
                                                value="{{ $dm->MADM }}">{{ $dm->TENDM }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Hình thức</label></br>
                                        <input name="type" type="radio" id="video" value="0" style="vertical-align:middle; cursor: pointer;" @if($khoahoc->TRUCTUYEN == false)
                                        {{"checked"}}
                                        @endif>
                                        <label for="video">Video</label><br>
                                        <input name="type" type="radio" id="tructuyen" value="1" style="vertical-align:middle; cursor: pointer;" @if($khoahoc->TRUCTUYEN == true)
                                        {{"checked"}}
                                        @endif>
                                        <label for="tructuyen">Trực tuyến</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Hình ảnh</label>
                                <input type="file" name="ANH" class="form-control">
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Giới thiệu khóa học</label>
                                <textarea rows="4" name="GIOITHIEUKH" class="form-control">{{$khoahoc->GIOITHIEUKH}}</textarea>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Chi tiết khóa học</label>
                                <textarea rows="6" name="CHITIETKH" class="form-control">{{$khoahoc->CHITIETKH}}</textarea>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-8">
                                <button type="submit" class="btn btn-default">Sửa</button>
                            </div>
                            <div class="col-4 text-right">
                                <a href="admin/khoahoc/" id="baihoc" class="btn btn-primary">Sửa bài học</a>
                                <a href="admin/khoahoc/" id="lophoc" class="btn btn-primary" style="display: none;">Sửa lớp học</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection