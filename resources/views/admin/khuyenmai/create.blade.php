@extends('admin.layout.index')
@section('content')
</script>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/khoahoc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/">Quản Lý Khuyến Mãi</a></li>
                            <li class="breadcrumb-item"><a href="admin/khoahoc/them">Thêm Khuyến Mãi</a></li>
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
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Thêm Khuyến Mãi</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="admin/khuyenmai" class="btn btn-sm btn-primary">Quay lại</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-8 center">
                    <form action="admin/khuyenmai/them" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">Thông tin khuyến mãi</h6>
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
                                <div class="col-lg-10">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tên khuyến mãi</label>
                                        <input type="text" name="TENKM" class="form-control" value="" required>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Tỷ lệ (%)</label>
                                        <input type="number" min="0" max="100" name="TYLEKM" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            @if (session('exits'))
                            <div class="">
                                <span class="error-message">{{session('exits')}}</span>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Ngày áp dụng</label>
                                        <input type="date" min="{{date('Y-m-d')}}" name="NGAYBD" class="form-control" value="{{date('Y-m-d')}}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Thời điểm</label>
                                        <input type="time" name="TDBD" class="form-control" value="{{date('h:i')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Ngày kết thúc</label>
                                        <input type="date" min="{{date('Y-m-d')}}" name="NGAYKT" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Thời điểm</label>
                                        <input type="time" name="TDKT" class="form-control" value="" required>
                                    </div>
                                </div>
                            </div>
                            @if (session('thatbai'))
                            <div class="">
                                <span class="error-message">{{session('thatbai')}}</span>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-3 center">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Danh sách áp dụng</label></br>
                                        <input name="hinhthuc" type="checkbox" id="all" value="1" style="vertical-align:middle; cursor: pointer;" onClick='toggle(this)'>
                                        <label>Tất cả khóa học</label><br>
                                        <!-- <input name="hinhthuc" type="radio" id="list" value="0" style="vertical-align:middle; cursor: pointer;" > 
                                        <label>Khóa học tùy chọn</label><br> -->
                                        <!-- <input name="hinhthuc" type="radio" id="course" value="0" style="vertical-align:middle; cursor: pointer;">
                                        <label>Khóa học</label><br>
                                        <input name="hinhthuc" type="radio" id="class" value="0" style="vertical-align:middle; cursor: pointer;">
                                        <label>Lớp học</label><br>
                                        <input name="hinhthuc" type="radio" id="teacher" value="0" style="vertical-align:middle; cursor: pointer;">
                                        <label>Giảng viên</label> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="form-group">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default">Thêm</button>
                                </div>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="">Danh sách áp dụng</th>
                                        <th scope="col" class="sort" data-sort="">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <!-- <tr>
                                        <td class="budget"></td>
                                        <td>
                                        <input name="hinhthuc" type="checkbox" id="all" value="1" style="vertical-align:middle; cursor: pointer;" onClick='toggle(this)' >
                                        </td> 
                                    </tr>                                                                      -->
                                    @foreach($khoahoc as $kh)
                                    <tr>
                                        <td class="budget">
                                            {{$kh->TENKH}}
                                        </td>
                                        <td>
                                            <input type="checkbox" name="danhsach[]" value="{{$kh->MAKH}}">
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection