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
                            <li class="breadcrumb-item"><a href="admin/baithi/duyet/{{ $id }}">Duyệt Bài Thi</a></li>
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
                    <h3 class="mb-0">Quản lý bài thi</h3>
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


<form action="{{ route('admin.baithi.duyet', ['id' => $id, 'search' => $search]) }}" method="POST">

    @csrf

    <div class="card-body">
        <div class="form-group">
            <label>Bài thi</label>
            <input class="form-control" type="text" value="{{ \App\Models\Baithi::find($id)->TENBT }}" readonly/>
        </div>
        <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" name="status" required>
                <option value="1">Duyệt</option>
                <option value="1">Từ chối</option>
            </select>
        </div>

        <div class="form-group">
            <label for="comment">Ý kiến</label>
            <textarea name="comment" class="form-control" id="comment"  placeholder="Nhập ý kiến..."></textarea>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Duyệt</button>
    </div>
    @csrf
</form>
</div>
@endsection
