@extends('admin.layout.index')
@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Light table</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="anh"></th>
                                <th scope="col" class="sort" data-sort="khoahoc">Khóa học</th>
                                <th scope="col" class="sort" data-sort="gia">Giá</th>
                                <th scope="col" class="sort" data-sort="gioithieu">Giới thiệu</th>
                                <th scope="col" class="sort" data-sort="loai">Môn học</th>
                                <th scope="col" class="sort" data-sort="loai">Trực tuyến</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach($khoahoc as $kh)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <img src=" {{asset('user/assets/imgCourse')}}/{{$kh->ANH}}"Width="262.5px" Height="131.25px">
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$kh->TENKH}}
                                </td>
                                <td class="budget">
                                    {{$kh->DONGIA}}
                                </td>
                                <td class="budget">
                                    {{substr($kh->GIOITHIEUKH, 0, 50)}}...
                                </td>
                                <td class="budget">
                                    {{$kh->MADMC}}
                                </td>
                                <td class="budget">
                                    {{$kh->TRUCTUYEN}}
                                </td>
                                @endforeach
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
