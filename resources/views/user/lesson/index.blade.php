@extends('user.layout.index')
@section('content')
<section class="learn userManager">
    {{-- <div class="container"> --}}
        {{-- <h1 class="heading">Video bài giảng</h1> --}}
    <div class="content d-flex">
        @if (!is_null($course_lesson_first))
            <div class="main-video">
                <div class="video">
                    @php
                        $lesson_first = \App\Models\BaiHoc::find($course_lesson_first->MABH);
                    @endphp
                    {!! $lesson_first->VIDEO !!}
                    <h3 class="title mt-10 mb-20 pl-20">{{ $lesson_first->TENBH }}</h3>
                </div>
            </div>

            <div class="video-list ">
                @php
                    $lesson_first = \App\Models\BaiHoc::find($course_lesson_first->MABH);
                @endphp
                <h2 class="tableOfContent">Danh Sách Bài Học</h2>
                <div class="list-lesson mt-5">
                    @foreach ($course_lessons as $course_lesson)
                    @php
                        $lesson = \App\Models\BaiHoc::find($course_lesson->MABH);
                    @endphp
                    <div class="vid {{ $lesson->MABH == $lesson_first->MABH ? 'active' : '' }} mb-5" data-lesson-id="{{ $lesson->MABH }} ">
                        @php
                            preg_match('/src="([^"]+)"/', $lesson->VIDEO, $match);
                            $url = $match[1];
                        @endphp
                        <video src="{{ $url }}" muted style="display:none;" class="videoLesson"></video>
                        {{-- <p class="timeOfVideo">
                            @php
                                $getID3 = new getID3;
                                $file = $getID3->analyze('https://www.youtube.com/embed/IByRxrpbQ2Y');
                                dd($file);
                                $duration = date('H:i:s.v', $file['playtime_seconds']);
                            @endphp
                        </p> --}}

                        <a class="title-lesson" style="margin:0 auto;">{{ $lesson->TENBH }}</a>
                    </div>
                @endforeach

                {{-- SECTION STARTS  --}}
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    CHUONG 1
                                </button>
                            </h2>
                            <div  id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" >
                                <div class="accordion-body">
                                    <ul class="list-lesson">
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 1.1
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 1.1
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 1.2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 1.3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 1.4
                                                </span>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                    CHUONG 2
                                </button>
                            </h2>
                            <div  id="collapse-2" class="accordion-collapse collapse show" aria-labelledby="heading-2" >
                                <div class="accordion-body">
                                    <ul class="list-lesson">
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 2.1
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 2.2
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 2.3
                                                </span>
                                            </li>
                                            <li>
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                </span>
                                                <span class="lesson-title">
                                                    BAI 2.4
                                                </span>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </div>
                {{-- SECTION ENDS --}}
              </div>
            </div>
        @else
            <div class="alert-no-video container ">
                <h2 class="text-danger">Hiện tại chưa có video bài giảng</h2>
           </div>
        @endif
     </div>
    {{-- </div> --}}
</section>
@stop


