@extends('user.layout.index')
@section('content')
<section class="learn userManager">
    <div class="content d-flex">
        @if (!is_null($course_lesson_first))
            <div class="main-video">
                @php
                    $lesson_first = \App\Models\BaiHoc::find($course_lesson_first->MABH);
                @endphp
                <div class="video" id="video_lesson">
                    @include('user.lesson.video', compact('lesson_first'))
                </div>
            </div>
            <div class="video-list  mb-30">
                <h2 class="tableOfContent">Danh Sách Bài Học</h2>
                {{-- SECTION STARTS  --}}
                <div class="accordion overflow-auto height-505" id="accordionExample">
                    <div class="accordion-item">
                        @foreach ($data as $k => $v)
                            @php
                                $chuong = \App\Models\ChuongHoc::find($k);
                            @endphp
                            <h2 class="accordion-header" id="heading-{{$chuong->MACHUONG}}">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$chuong->MACHUONG}}" aria-expanded="true" aria-controls="collapse-{{ $chuong->TENCHUONG }}">
                                    {{ $chuong->TENCHUONG }}
                                </button>
                            </h2>
                            <div id="collapse-{{$chuong->MACHUONG}}" class="accordion-collapse collapse show " aria-labelledby="heading-{{$chuong->MACHUONG}}" >
                                <div class="accordion-body p-0 ">
                                    <ul class="list-lesson ">
                                        @foreach ($v as $item)
                                            <li onclick="playLesson({{ $item->MABH }})" class="vid d-flex">
                                                <span class="lesson-icon-play">
                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px"  style="cursor: pointer;">
                                                </span>
                                                <span class="lesson-title">
                                                    {{ $item->TENBH }}
                                                </span>

                                            </li>
                                            @if($exam->find($item->MABT))
                                                <a href="exam/{{$item->MABT}}" class="vid d-flex">
                                                    <span class="lesson-title">
                                                        {{$item->MABT}}
                                                    </span>
                                                </a>

                                            @endif
                                         @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- SECTION ENDS --}}
            </div>
            @else
            <div class="alert-no-video container ">
                <h2 class="text-danger">Hiện tại chưa có video bài giảng</h2>
          </div>
        @endif
    </div>
</section>
@stop