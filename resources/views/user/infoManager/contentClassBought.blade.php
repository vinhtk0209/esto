@extends('user.layout.index')
@section('content')
{{-- COURSE DETAIL STARTS --}}
<section id="course-detail">
    {{-- COURSE DETAIL HEADER STARTS --}}
    <div class="course-detail-header">
            <div class="container">
                <div class="title-des">
                    <div class="name-course-detail">
             @foreach ($productDetail as $product)
                        <h1>{{$product->TENKH}}</h1>
                        <h3 class="text-danger mt-5">({{$product->TRUCTUYEN == 1?'Trực tuyến':'Video'}})</h3>
                    </div>
                    <div class="des-course-short mt-5">
                        {!!$product->GIOITHIEUKH!!}
                    </div>
                </div>
                <div class="teacher-course">
                    <div class="ava-teacher">
                        {{-- <img src="https://static.unica.vn/uploads/thaoptt09@gmail.com/August252017100pm_do-trung-thanh_thumb.jpg" alt="" class="picture-teacher-circle"> --}}
                        <a href="" class="name-teacher">{{$product->HOTEN}}</a>
                    </div>
                    <div class="rate-teacher">
                            <p>
                                <span class="star-rate">
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                    <i class="fas fa-star star-color"></i>
                                </span>
                                <span class="num-rate">{{$countRate}} đánh giá</span>
                            </p>
                    </div>
                    <div class="nums-student">
                        <span class="icon-student">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            {{$countStudent}} Học viên
                        </span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- COURSE DETAIL HEADER ENDS --}}

    {{-- COURSE DETAIL BODY STARTS --}}
    <div class="course-detail-body">
        {{-- TAB STARTS --}}
        <section class="tab-detail">
            <div class="container">
                <ul class="list-tab-detail">
                    <li>
                        <a href="#intro-course" class="tab-name">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#content-course" class="tab-name">Nội dung khóa học</a>
                    </li>
                    {{-- <li>
                        <a href="#info-teacher-course" class="tab-name">Thông tin giảng viên</a>
                    </li> --}}
                    <li>
                        <a href="#rate-course" class="tab-name">Đánh giá</a>
                    </li>
                </ul>
            </div>
        </section>
        {{-- TAB ENDS --}}
    </div>
    {{-- COURSE DETAIL BODY ENDS --}}

    {{-- INTRO COURSE STARTS --}}
    <div id="intro-course " class="mt-10">
        <div class="container">
            <div class="intro-course-des">
                <div class="intro-title intro-header">
                    <h3>Giới thiệu khóa học</h3>
                </div>
                <div class="intro-body">
                    <p class="intro-body-header"><strong>
                        Giới thiệu khóa học “{{$product->TENKH}}”:</strong>
                    </p>
                    <div class="intro-body-content">
                        {!!$product->CHITIETKH!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- INTRO COURSE ENDS --}}

    {{-- CONTENT COURSE START --}}
    <div id="content-course" class="mt-10">
        <div class="container">
            <div class="intro-course-des">
                <div class="intro-title intro-header">
                    <h3>Nội dung khóa học</h3>
                </div>
                @if ($courseOnline==0)
                <div class="intro-body">
                    @if ($sectionCourse->count())
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                @foreach ($sectionCourse as $section)
                                    <h2 class="accordion-header" id="heading{{$section->MACHUONG}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$section->MACHUONG}}" aria-expanded="true" aria-controls="collapse{{$section->MACHUONG}}">
                                            {{$section->TENCHUONG}}
                                        </button>
                                    </h2>
                                    @foreach ($lessonCourse->where('MACHUONG',$section->MACHUONG) as $lesson)
                                            <div  id="collapse{{$section->MACHUONG}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$section->MACHUONG}}" >
                                                <div class="accordion-body">
                                                    <ul class="list-lesson">
                                                            <li>
                                                                <span class="lesson-icon-play">
                                                                    <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                                </span>
                                                                <span class="lesson-title">
                                                                    {{$lesson->TENBH}}
                                                                </span>
                                                         </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    @else
                        <p class="no-section">Chưa có bài học nào</p>
                    @endif
                    @else
                    @if (count($classRoom))
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                @foreach ($sectionCourse as $section)
                                    <h2 class="accordion-header" id="heading{{$section->MACHUONG}}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$section->MACHUONG}}" aria-expanded="true" aria-controls="collapse{{$section->MACHUONG}}">
                                            {{$section->TENCHUONG}}
                                        </button>
                                    </h2>
                                    @foreach ($lessonCourse->where('MACHUONG',$section->MACHUONG) as $lesson)
                                            <div  id="collapse{{$section->MACHUONG}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$section->MACHUONG}}" >
                                                <div class="accordion-body">
                                                    <ul class="list-lesson">
                                                        <li>
                                                            <div class="list-lesson-body d-flex justify-content-between align-items-center">
                                                                <div class="name-lesson">
                                                                    <span class="lesson-icon-play">
                                                                        <img src="{{asset('user/assets/img/play.svg')}}" alt="ESTO" width="20px" height="20px">
                                                                    </span>
                                                                    <span class="lesson-title-item">
                                                                        {{$lesson->TENBH}}

                                                                    </span>
                                                                </div>
                                                                <div class="lesson-title ">
                                                                    <div class="lesson-title-item-date-start">
                                                                        {{$lesson->TGBD}}
                                                                    </div>
                                                                    <div class="lesson-title-item-date-end">
                                                                        {{$lesson->TGKT}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    @endforeach
                            </div>
                        </div>
                    @endforeach
                    @else
                    <p class="no-section">Chưa có lớp học</p>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
    {{-- CONTENT COURSE ENDS --}}

     {{-- RATE COURSE STARTS --}}
    <div id="rate-course" class="mt-10">
        <div class="container">
            <div class="intro-course-des">
                <div class="intro-title intro-header">
                    <h3>Đánh giá khóa học</h3>
                </div>
                <div class="intro-body">
                    <div class="rate-course-summary">
                        <span class="rate-course-ratingnumber">
                            0</span>
                    <div class="rate-course-rating-container">
                        <p>
                            <span class="star-rate">
                                <i class="fas fa-star star-color"></i>
                                <i class="fas fa-star star-color"></i>
                                <i class="fas fa-star star-color"></i>
                                <i class="fas fa-star star-color"></i>
                            </span>
                        </p>
                        <span class="num-rate">0 đánh giá</span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     {{-- RATE COURSE ENDS --}}

    {{-- RELATED SCIENCE START --}}
    <div class="related-course mt-10">
        <div class="related-course-head ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 intro-title ">
                        <h3 class="intro-header intro-course-des ">khóa học liên quan</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="related-course-body mt--20">
            <div class="container postion-relative">
                <ul class="swiper list-related-courses list-course mw-70p ">
                    <div class="swiper-wrapper">
                        @foreach ($relatedCourse as $relaCourse)
                            <li class="swiper-slide list-free-course list-item">
                                    <a href="{{URL::to('/courseDetail/'.$relaCourse->MAKH)}}" class="course-box">
                                        <div class="img-course">
                                            <img class="img-responsive "
                                            src="{{('./user/assets/imgCourse')}}/{{$relaCourse->ANH}}"
                                           alt="{{$relaCourse->TENKH}}">
                                        </div>
                                        <div class="course-des">
                                            <div class="name-course">
                                                <h4>{{$relaCourse->TENKH}} </h4>
                                            </div>
                                            <div class="name-teacher d-flex flex-space">
                                                <p class="">{{$relaCourse->HOTEN}}</p>
                                                {{-- <div class="price price-discount">
                                                    <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                                </div> --}}
                                            </div>
                                            <div class="price-course d-flex flex-space">
                                                <div class="rate">
                                                    <p>
                                                        <span class="star-rate">
                                                            <i class="fas fa-star star-color"></i>
                                                            <i class="fas fa-star star-color"></i>
                                                            <i class="fas fa-star star-color"></i>
                                                            <i class="fas fa-star star-color"></i>
                                                        </span>
                                                    </p>
                                                </div>
                                                <p>{{number_format($relaCourse->DONGIA)}}<span class="price-unit"><sup>vnd</sup></span></p>
                                            </div>
                                        </div>
                                    </a>
                            </li>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </ul>
                <div class="swiper-button-next btn-next-courses postion-right-310"></div>
                <div class="swiper-button-prev btn-prev-courses postion-left-45"></div>
            </div>
        </div>
    </div>
    {{-- RELATED SCIENCE END --}}
</section>
{{-- COURSE DETAIL ENDS --}}

@endsection




