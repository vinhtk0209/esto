@extends('user.layout.index')
@section('content')
<section class="learn userManager">
    <div class="content d-flex">
        <div class="main-video">
            @php
                $lesson_first = \App\Models\BaiHoc::find($course_lesson_first->MABH);
            @endphp
            <div class="video" id="video_lesson">
                @include('user.lesson.video', compact('lesson_first'))
            </div>
        </div>
        <div class="video-list ">
            <h2 class="tableOfContent">Danh Sách Bài Học</h2>
            {{-- SECTION STARTS  --}}
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    @foreach ($data as $k => $v)
                        @php
                            $chuong = \App\Models\ChuongHoc::find($k);
                        @endphp
                        <h2 class="accordion-header" id="heading-1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                {{ $chuong->TENCHUONG }}
                            </button>
                        </h2>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" >
                            <div class="accordion-body">
                                <ul class="list-lesson">
                                    @foreach ($v as $item)
                                        <li>
                                            <span class="lesson-icon-play">
                                                <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px" onclick="playLesson({{ $item->MABH }})" style="cursor: pointer;">
                                            </span>
                                            <span class="lesson-title">
                                                {{ $item->TENBH }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- SECTION ENDS --}}
        </div>
    </div>
</section>
@stop


