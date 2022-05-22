@extends('user.infoManager.index')
@section('infoFile')
{{-- INFO STARTS --}}

<section class="infoUser-file mt-10" >
    <div class="container">
        <div class="info-content p-y-5 border-default ">
          <!-- Card header -->
          <div class="card-header border-0 text-blue">
            <h3 class="mb-0 text-center">Bài thi của học viên: {{$bailam->HOTEN}} - {{$diem}} Điểm</h3>
        </div>
        <!-- Light table -->
        <div class="score-detail-container px-4 mt-2">
            <div class="table table-bordered box-shadow-my-score-tale">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light" style="background-color:#f6f9fc;color:#8898aa ">
                        <tr>
                            <th scope="col" class="sort" data-sort="siso">Câu hỏi</th>
                            <th scope="col" class="sort" data-sort="tenlop">Đáp án học viên</th>
                            <th scope="col" class="sort" data-sort="tenlop">Câu đúng</th>
                            <th scope="col" class="sort" data-sort="tenlop">Điểm</th>
                            <th scope="col" class="sort" data-sort="tenlop"></th>
                        </tr>
                    </thead>
                    <tbody  style="color:#525f7f">
                        @foreach($baithi as $bt)
                        <tr>
                            <td class="budget">
                                {{$bt->NOIDUNG}}
                            </td>
                            <td class="budget">
                                @php($cautl = $ctbailam->where('MACH', $bt->MACH)->first())
                                {{$cautl->DAPAN}}
                            </td>
                            <td class="budget">
                                {{$bt->CAUDUNG}}
                            </td>
                            <td class="budget">
                                {{$bt->DIEM}}
                            </td>
                            <td class="budget">
                                @if ($cautl->DAPAN != $bt->CAUDUNG)
                                    <strong class="text-danger">Sai</strong>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</section>

@endsection
