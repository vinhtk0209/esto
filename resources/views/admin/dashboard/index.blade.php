@extends('admin.layout.index')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="admin/dashboard/"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin/dashboard/">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Khóa Học</h5>
                                    <span class="h2 font-weight-bold mb-0">{{count($khoahoc)}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        {{-- <i class="ni ni-active-40"></i> --}}
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Học Viên</h5>
                                    <span class="h2 font-weight-bold mb-0">{{count($hocvien)}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        {{-- <i class="ni ni-chart-pie-35"></i> --}}
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Giảng Viên</h5>
                                    <span class="h2 font-weight-bold mb-0">{{count($giangvien)}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                        {{-- <i class="ni ni-chart-bar-32"></i> --}}
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Tổng DT</h5>
                                    <span id="revenue" class="h2 font-weight-bold mb-0">{{$tongdoanhthu}}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-money-coins"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-6">
            <div class="card bg-default">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6> -->
                            <h5 class="h3 text-white mb-0">Doanh Thu</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="piechart" style="width:100%;height:400px;" class="mb-4"></div>
                    <form action="{{ route('admin.dashboard.report.revenue') }}" method="GET">
        
                        <div class="form-group">
                            <label class="text-white" for="start_date">Ngày bắt đầu</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="text-white" for="end_date">Ngày kết thúc</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" required/>
                        </div>
                        <button type="submit" class="btn btn-primary">Thống kê</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <!-- <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6> -->
                            <h5 class="h3 mb-0">Doanh Số</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="piechart-1" style="width:100%;height:400px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="data" value="{{ json_encode(Session::get('revenues')) }}" />
<input type="hidden" id="data_1" value="{{ json_encode($courses) }}" />
@endsection
@section('js')
    <script type="text/javascript">
        var total = 0;
        var txt = document.getElementById('revenue').textContent;
        var arr = [['Ngày', 'Doanh thu']];
        var orders = JSON.parse(document.getElementById('data').value);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        for (var x of orders){
        total += x.total_price;
        arr.push([x.order_day,parseInt(x.total_price)])
        }  
        function drawChart() {

        var data = google.visualization.arrayToDataTable(
            arr
        );

        var options = {
            title: 'Thống kê doanh thu theo ngày'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
        }
        if (total <= 0) {
            document.getElementById('revenue').innerText = txt;
        } else {
            document.getElementById('revenue').innerText = total;
        }
    </script>
    <script type="text/javascript">
        var arr1 = [['Ngày', 'Số khóa học']];
        var orders = JSON.parse(document.getElementById('data_1').value);
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        for (var x of orders){
        arr1.push([x.order_day,parseInt(x.total_course)])
        }  
        function drawChart() {

        var data = google.visualization.arrayToDataTable(
            arr1
        );

        var options = {
            title: 'Doanh số khóa học theo ngày'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart-1'));

        chart.draw(data, options);
        }
    </script>
@endsection