@extends('admin.layout.index')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">        
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">CHI TIẾT KHUYẾN MÃI</h3>
                        </div>                       
                    </div>
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
                            <button type ="submit" class="btn btn-sm btn-success mr-4">Lưu thông tin</button>                
                        </form>                    
                </div>
                <br><br><br>
                <div class="col-md-5 center">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="">Danh sách áp dụng</th>
                                <th scope="col" class="sort" data-sort="">Tùy chọn</th>
                            </tr>
                        </thead>
                        <tbody class="list">                            
                            <!-- @foreach($khoahoc as $kh)
                            <tr>                                
                                <td class="budget">
                                    {{$kh->TENKH}}
                                </td>
                                <td>
                                    <button class = "btn btn-sm btn-info  mr-4">Chi tiết</button>
                                </td>
                                @endforeach  
                            </tr>       -->
                            <tr>  
                                                                
                                    <td class="budget">
                                        Đệm hát guitar
                                    </td>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td> 
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>   
</div>
@endsection