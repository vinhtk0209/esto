@extends('user.layout.index')
@section('content')
<div class="related-course mt-30 mb-30">
  <div class="container-fluid">
    <div class="row mt--5 justify-content-md-center">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card card-upgrade">
          <div class="card-header text-center border-bottom-0">
            <h2 class="card-title font-weight-bold">{{$baithi[0]->TENBT}}</h4>
            <div class="time-container">
                @if($baithi[0]->TGBD!='0000-00-00 00:00:00')
                    <input type="text" class="exam-time time-start" id="TGBD" value="{{$baithi[0]->TGBD}}" disabled>
                    <input type="text" id="TGKT" class="exam-time time-finish" value="{{$baithi[0]->TGKT}}" disabled>
                @endif
            </div>
            @if($baithi[0]->TGBD!='0000-00-00 00:00:00')
                <div id="progressBar">
                    <div class="bar"></div>
                    <div class=" timerProgress" id="countdown">
                </div>
            @endif
            </div>
          </div>
          <div class="card-body mt-10">
            <form action="exam/{{$baithi[0]->MABT}}/saveAnswer" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="table-responsive table-upgrade" id="table_data">
                @include('user.exam.question')
              </div>
              <a href="/" class="register-btn text-decoration-none float-end " onclick="return confirm('Bạn có muốn nộp bài bây giờ?')" >Nộp bài</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection