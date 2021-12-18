<section class="best-seller mb-16">
    <div class="best-seller-head">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-course">Tìm kiếm với từ khóa: {{$q}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="best-seller-body">
        <div class="container">
            <ul class="list-best-seller-courses list-course d-flex flex-wrap">
                @foreach ($courses as $course)
                <li class="list-best-seller list-item">
                    <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="course-box">
                        <div class="img-course">
                            <img class="img-responsive "
                                src="{{asset('user/assets/imgCourse')}}/{{$course->ANH}}"
                                alt="{{$course->TENKH}}">
                        </div>
                        <div class="course-des">
                            <div class="name-course">
                                <h4>{{$course->TENKH}}</h4>
                            </div>

                            <div class="name-teacher d-flex flex-space">
                                <p class="">{{$course->HOTEN}}</p>
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
                                <p>{{number_format($course->DONGIA)}} <span class="price-unit"><sup>vnd</sup></span></p>
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
             </ul>
        </div>
    </div>

 </section>