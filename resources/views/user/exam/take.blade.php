@extends('user.layout.index')
@section('content')
<div class="related-course mt-10">
  <div class="container-fluid">
    <div class="row mt--5 justify-content-md-center">
      <div class="col-md-10 ml-auto mr-auto">
        <div class="card card-upgrade">
          <div class="card-header text-center border-bottom-0">
            <h4 class="card-title">{{$baithi[0]->TENBT}}</h4>
            <input type="text" id="TGBD" value="{{$baithi[0]->TGBD}}" disabled>->
            <input type="text" id="TGKT" value="{{$baithi[0]->TGKT}}" disabled>
            <div id="progressBar">
                <div class="bar"></div>
                <div class=" timerProgress" id="countdown">
            </div>
            </div>
          </div>
          <div class="card-body">
            <form action="exam/{{$baithi[0]->MABT}}/saveAnswer" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="table-responsive table-upgrade" id="table_data">
                @include('user.exam.question')
              </div>
              <a href="/" class="btn btn-default" onclick="return confirm('Bạn có muốn nộp bài bây giờ?')">Nộp bài</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
