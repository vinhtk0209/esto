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
                            <li class="breadcrumb-item"><a href="admin/khoahoc/sua/{{$khoahoc->MAKH}}">Sửa Khóa Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <form action="admin/khoahoc/sua/{{$khoahoc->MAKH}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="./user/assets/imgCourse/{{$khoahoc->ANH}}" id="anh" alt="Image placeholder" class="card-img-top">
                    <div class="course-des">
                        <div class="name-course">
                            <h4 id="tenkhoahoc">{{$khoahoc->TENKH}}</h4>
                        </div>
                        <div class="name-teacher d-flex flex-space">
                            <div class="col-8">
                                @if (session('login') != null && session('login')->LOAITK == 3)
                                <p class="" id="giangvien">{{$khoahoc->rTaiKhoan->HOTEN}}</p>
                                @else
                                <p>{{session('login')->HOTEN}}</p>
                                @endif
                            </div>
                            <div class="col-4 text-right">
                                <div class="price price-discount">
                                    <p><del id="dongia">{{$khoahoc->DONGIA}}</del><span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="price-course d-flex flex-space">
                            <div class="col-8">
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
                            </div>
                            <div class="col-4 text-right">
                                <p id="giamgia">{{$khoahoc->DONGIA}}<span class="price-unit"><sup>vnd</sup></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <label id="lbl"></label>
                        <button type="submit" id="themkhoahoc" class="btn btn-default" data-target="#formkhoahoc">Sửa khóa học</button>
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
                        <h6 class="heading-small text-muted mb-4">Thông tin khóa học</h6>
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        @if (session('login') != null && session('login')->LOAITK == 3)
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Giảng viên</label></br>
                                        <select name="MATK" id="MATK" class="form-control" style="height:46px">
                                            @foreach($taikhoan as $tk)
                                            <option @if($khoahoc->MAGV == $tk->ID)
                                                {{"selected"}}
                                                @endif
                                                value="{{ $tk->ID }}">{{ $tk->HOTEN }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tên khóa học</label>
                                        <input type="text" id="TENKH" name="TENKH" class="form-control" value="{{$khoahoc->TENKH}}" onkeyup="textChange()">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Giá khóa học (VNĐ)</label>
                                        <input type="number" id="DONGIA" name="DONGIA" class="form-control" value="{{$khoahoc->DONGIA}}" min="50000" onkeyup="textChange()" required oninvalid="this.setCustomValidity('Giá khóa học >= 50.000')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Môn học</label></br>
                                        <select name="MADM" class="form-control" style="height:46px">
                                            @foreach($danhmuc as $dm)
                                            <option @if($khoahoc->MADM == $dm->MADM)
                                                {{"selected"}}
                                                @endif
                                                value="{{$dm->MADM }}">{{ $dm->TENDM }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Hình thức</label></br>
                                        <input name="hinhthuc" type="radio" id="video" value="0" style="vertical-align:middle; cursor: pointer;" @if($khoahoc->TRUCTUYEN == false)
                                        {{"checked"}}
                                        @endif>
                                        <label for="video">Video</label><br>
                                        <input name="hinhthuc" type="radio" id="tructuyen" value="1" style="vertical-align:middle; cursor: pointer;" @if($khoahoc->TRUCTUYEN == true)
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
                                <input type="file" id="ANH" name="ANH" class="form-control" onchange="imgchange(event)">
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Giới thiệu khóa học</label>
                                <textarea rows="4" name="GIOITHIEUKH" class="ckeditor form-control">{{$khoahoc->GIOITHIEUKH}}</textarea>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Chi tiết khóa học</label>
                                <textarea rows="6" name="CHITIETKH" class="ckeditor form-control">{{$khoahoc->CHITIETKH}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
