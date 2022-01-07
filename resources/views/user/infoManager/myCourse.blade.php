@extends('user.infoManager.index')
@section('myCourse')
 <!-- MY COURSE STARTS-->
 <section class="my-course mt-10 min-height-400">
    <div class="my-course-body">
        {{-- TAB TITLE COURSE STARTS --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Video</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Trực tuyến</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                {{-- COURSE CONTENT STARTS--}}
                <ul class="list-my-course">
                    @foreach ($listMyCourse as $course)
                    @if ($course->TRUCTUYEN == 0 )
                    <li class="list-item mb-16">
                        <div class="my-course-item d-flex">
                            <div class="img-course">
                                <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}">
                                    <img class="img-responsive d-block "
                                    src="{{asset('user/assets/imgCourse')}}/{{$course->ANH}}"
                                    alt="{{$course->TENKH}}">
                                </a>
                            </div>
                            <div class="course-des ml-10 flex-grow-1">
                                <div class="name-course d-flex flex-space mt-0 ">
                                    <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="text-brow  text-decoration-none my-course-title">
                                        <h4>{{$course->TENKH}}</h4>
                                        <h4 class="text-danger">({{$course->TRUCTUYEN == 1?'Trực tuyến':'Video'}})</h3>
                                    </a>
                                    <span class="num-rate text-danger">{{DB::table('danhgia')->where('danhgia.MAKH', $course->MAKH)->count();}} đánh giá</span>
                                </div>
                                <div class="des-course-short">
                                    {!!$course->GIOITHIEUKH!!}
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="font-weight-bold">{{$course->HOTEN}}</p>
                                    <div class="nums-student">
                                        <span class="icon-student">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        {{DB::table('cthoadon')->where('cthoadon.MAKH', $course->MAKH)->count();}} Học viên
                                        </span>

                                    </div>
                                </div>
                                <div class="d-flex flex-end">
                                    <p><span class="price-unit"><a class="register-btn text-decoration-none mr-0 " href="{{ route('learn.course',['id' => $course->MAKH]) }}">Vào Học</a></span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                     @endif
                    @endforeach
                </ul>
            {{-- COURSE CONTENT ENDS--}}
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                 {{-- COURSE CONTENT STARTS--}}
                 <ul class="list-my-course">
                    @foreach ($listMyCourse as $course)
                    @if ($course->TRUCTUYEN == 1)
                    
                    <li class="list-item mb-16">
                        <div class="my-course-item d-flex">
                            <div class="img-course">
                                <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}">
                                    <img class="img-responsive d-block "
                                    src="{{asset('user/assets/imgCourse')}}/{{$course->ANH}}"
                                    alt="{{$course->TENKH}}">
                                </a>
                            </div>
                            <div class="course-des ml-10 flex-grow-1">
                                <div class="name-course d-flex flex-space mt-0 ">
                                    <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="text-brow  text-decoration-none my-course-title">
                                        <h4>{{$course->TENKH}}  </h4>
                                        <h4 class="text-danger">({{$course->TRUCTUYEN == 1?'Trực tuyến':'Video'}})</h3>
                                    </a>
                                    <span class="num-rate text-danger">{{DB::table('danhgia')->where('danhgia.MAKH', $course->MAKH)->count();}} đánh giá</span>
                                </div>
                                <div class="des-course-short">
                                    {!!$course->GIOITHIEUKH!!}
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="font-weight-bold">{{$course->HOTEN}}</p>
                                    <div class="nums-student">
                                        <span class="icon-student">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        {{DB::table('cthoadon')->where('cthoadon.MAKH', $course->MAKH)->count();}} Học viên
                                        </span>

                                    </div>
                                </div>
                                <div class="d-flex flex-end">
                                    <p><span class="price-unit"><a class="register-btn text-decoration-none mr-0 " href="{{ route('learn.course',['id' => $course->MAKH]) }}">Vào Học</a></span></p>
                                </div>
                            </div>
                        </div>
                    </li>
                     @endif
                    @endforeach
                </ul>
            {{-- COURSE CONTENT ENDS--}}
            </div>
          </div>
        {{-- TAB TITLE COURSE ENDS --}}

        
        </div>
    </section>
    <!-- MY COURSE ENDS-->
@endsection

