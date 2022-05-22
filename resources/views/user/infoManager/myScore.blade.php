@extends('user.infoManager.index')
@section('infoFile')
{{-- INFO STARTS --}}

<section class="infoUser-file mt-10" >
    <div class="container">
        <div class="info-content p-y-5 border-default ">
            @if (Session::has('noTest'))
                <div class="text-center">
                    <strong class="text-danger">{{Session::get('noTest')}}</strong>
                </div>
            @else
                <!-- Card header -->
                <div class=" text-center">
                    <h2 class="mt-2 mb-2">Danh sách bài làm</h2>
                </div>
                <!-- Light table -->
                <div class="score-container px-4 "  >
                    <table class="table table-bordered box-shadow-my-score-tale">
                        <thead class="thead-light" style="background-color:#f6f9fc;color:#8898aa  ">
                          <tr>
                            <th scope="col" class="sort" data-sort="siso">Tên bài thi</th>
                            <th scope="col" class="sort" data-sort="tenlop">Điểm</th>
                            <th scope="col" class="sort" data-sort="options"></th>
                          </tr>
                        </thead>
                        <tbody style="color:#525f7f">
                            @foreach($bailamAll as  $bl)
                            <tr>
                                <td class="budget" >
                                    {{$bl->TENBT}}
                                </td>
                                <td class="budget" >
                                    {{$dsDiem[$bl->MABL]}}
                                    {{-- @php($diem = 0)
                                     @foreach($ctbailam->where('MAHV', $bl->MAHV)->where('MABL', $bl->MABL) as $ct)
                                    @php($CAUHOI = $baithi->where('MACH', $ct->MACH)->first())
                                      @if($ct->DAPAN == $CAUHOI->CAUDUNG)
                                    @php($diem += $CAUHOI->DIEM)
                                     @endif
                                    @endforeach
                                    {{$diem}} --}}
                                </td>
                                <td class="budget">
                                    <a href="admin/baithi/dsdiem/{{$bl->MAHV}}" class="btn btn-success text-decoration-none">Chi tiết bài làm</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
                {{-- <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0 pagintaion-custom">
                        @if ($bailam->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                         @endif
                            <a class="page-link" href="{{$bailam->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>

                        @if ($bailam->currentPage() == $bailam->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                        @endif
                            <a class="page-link" href="{{$bailam->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
                @if ($bailamAll->lastPage() != 1)
                <div class="card-footer py-4">
                    <ul class="pagination justify-content-end mb-0 pagintaion-custom" id="paginate">
                        <li class="page-item">
                            <a class="page-link" href="/infoUser/showMyScore?page=1">
                                <i class="fas fa-angle-double-left"></i>
                            </a>
                        </li>
                        @if ($bailamAll->currentPage() == 1)
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$bailamAll->previousPageUrl()}}">
                                <i class="fas fa-angle-left"></i>
                            </a>
                        </li>
                        @if ($bailamAll->currentPage() == $bailamAll->lastPage())
                        <li class="page-item disabled">
                            @else
                        <li class="page-item">
                            @endif
                            <a class="page-link" href="{{$bailamAll->nextPageUrl()}}">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="infoUser/showMyScore?page={{$bailamAll->lastPage()}}">
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                @endif
                @endif
        </div>
    </div>
</section>

@endsection
