@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/danhmuc/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/danhmuc/">Quản Lý Danh Mục</a></li>
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
                    <h3 class="mb-0">Quản lý danh mục</h3>
                </div>

                @if (Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif

                @if (Session::has('failed'))
                <div class="alert alert-danger">
                    {{Session::get('failed')}}
                </div>
                @endif

            </div>
        </div>
    </div>


<form action="" method="POST">
    <div class="card-body">

        <div class="form-group">
            <label for="menu">Tên Danh Mục</label>
            <input type="text" name="name" class="form-control" id="menu"  placeholder="Nhập tên danh mục...">
            <span class="error-message">@error('name'){{$message}}@enderror</span>
        </div>

        <div class="form-group">
            <label>Danh Mục</label>
            <select class="form-control" name="parent_id">
                    <option value="0"> Danh Mục Cha </option>
                @foreach ($cateParent as $cateP)
                    <option value="{{$cateP->MADM}}"> {{$cateP->TENDM}} </option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label>Kích Hoạt</label>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                <label for="active" class="custom-control-label">Có</label>
            </div>
            <div class="custom-control custom-radio">
                <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                <label for="no_active" class="custom-control-label">Không</label>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
    @csrf
</form>
</div>
@endsection
