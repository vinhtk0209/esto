@extends('admin.layout.index')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-4">KHUYẾN MÃI</h3>
                </div>
                <div class="col-md-8 center">
                    <form>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-username">Tên khuyến mãi</label>
                                    <input type="text" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-username">Tỷ lệ</label>
                                    <input type="number" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" >Ngày áp dụng</label>
                                        <input type="date"  class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Thời điểm</label>
                                        <input type="time" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Ngày kết thúc</label>
                                        <input type="date"  class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" >Thời điểm</label>
                                        <input type="time" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>                      
                    </form>
                    <button type ="submit" class="center btn btn-sm btn-success mr-4">Thêm Khuyến Mãi</button>
                </div>
                    
                <br><br><br>                 

                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="">Tên Khuyến mãi</th>
                                <th scope="col" class="sort" data-sort="">Ngày bắt đầu</th>
                                <th scope="col" class="sort" data-sort="">Ngày kết thúc</th>
                                <th scope="col" class="sort" data-sort="">Trạng thái</th>
                                <th scope="col" class="sort" data-sort="">Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <!-- @foreach($khuyenmai as $km)
                            <tr>                                
                                <td class="budget">
                                    {{$km->TENKM}}
                                </td>
                                <td class="budget">
                                    {{$km->NGAYBD}}
                                </td>
                                <td class="budget">
                                    {{$km->NGAYKT}}
                                </td>
                                <td class="budget">
                                    {{$km->MATT}}
                                </td>
                                <td>
                                    <button class = "btn btn-sm btn-info  mr-4">Chi tiết</button>
                                </td>
                                @endforeach -->
                                <tr>                                
                                    <td class="budget">
                                        Nhà giáo Việt Nam
                                    </td>
                                    <td class="budget">
                                        10/11/2021
                                    </td>
                                    <td class="budget">
                                        20/11/2021
                                    </td>
                                    <td class="budget">
                                        Ngưng áp dụng
                                    </td>
                                    <td>
                                        <a href="{{route('admin.khuyenmai.chitietkm')}}" class = "btn btn-sm btn-primary">Chi tiết</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection