@extends('admin.layout.index')
@section('content')
<!-- Form Them khoa hoc -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/khoahoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/">Quản Lý Khóa Học</a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/them">Thêm Khóa Học</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <form action="admin/khoahoc/them" id="main_form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">
                    <img src="./images/image.png" id="anh" class="card-img-top" width="250px" height="160px">
                    <div class="course-des">
                        <div class="name-course">
                            <h4 id="tenkhoahoc"></h4>
                        </div>
                        <div class="name-teacher d-flex flex-space">
                            <p class="" id="giangvien">{{$taikhoan[0]->HOTEN}}</p>
                            <div class="price price-discount">
                                <p><del id="dongia"></del><span class="price-unit"><sup>vnd</sup></span></p>
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
                            <p id="giamgia"><span class="price-unit"><sup>vnd</sup></span></p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8">
                        <label id="lbl"></label>
                        <button type="submit" id="themkhoahoc" class="btn btn-default" data-target="#formkhoahoc">Thêm khóa học</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1" id="formkhoahoc">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Thêm khóa học</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="admin/khoahoc/" class="btn btn-sm btn-primary">Quay lại</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">Thông tin khóa học</h6>
                        <!-- <span id="thongbao"></span> -->
                        @if (count($errors))
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}</br>
                            @endforeach
                        </div>
                        @endif
                        @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Giảng viên</label></br>
                                        <select name="MATK" id="MATK">
                                            @foreach($taikhoan as $tk)
                                            <option value="{{ $tk->ID }}" onkeyup="textChange()">{{ $tk->HOTEN }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tên khóa học</label>
                                        <input type="text" id="TENKH" name="TENKH" class="form-control" onkeyup="textChange()" required oninvalid="this.setCustomValidity('Bạn chưa nhập tên khóa học')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Giá khóa học</label>
                                        <input type="number" id="DONGIA" name="DONGIA" class="form-control" min="0" onkeyup="textChange()" required oninvalid="this.setCustomValidity('Bạn chưa nhập giá khóa học')" oninput="this.setCustomValidity('')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Môn học</label></br>
                                        <select id="MADM" name="MADM">
                                            @foreach($danhmuc as $dm)
                                            <option value="{{ $dm->MADM }}">{{ $dm->TENDM }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Hình thức</label></br>
                                        <input name="hinhthuc" type="radio" id="video" value="0" style="vertical-align:middle; cursor: pointer;" checked>
                                        <label>Video</label><br>
                                        <input name="hinhthuc" type="radio" id="tructuyen" value="1" style="vertical-align:middle; cursor: pointer;">
                                        <label>Trực tuyến</label>
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
                                <textarea rows="4" id="GIOITHIEUKH" name="GIOITHIEUKH" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập mục giới thiệu')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Chi tiết khóa học</label>
                                <textarea rows="6" id="CHITIETKH" name="CHITIETKH" class="form-control" required oninvalid="this.setCustomValidity('Bạn chưa nhập mục chi tiết')" oninput="this.setCustomValidity('')"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection