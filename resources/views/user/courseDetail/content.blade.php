<div class="buy-course">
    <div class="img-course">
        <img class="img-responsive "
            src="{{asset('user/assets/imgCourse')}}/{{$product->ANH}}"
            alt="{{$product->TENKH}}">
        </div>
    <div class="price-container">
        <p class="main-price">{{number_format($product->DONGIA)}} <span class="price-unit"><sup>vnd</sup></span></p>
        {{-- <div class="price price-discount">
            <p><del>600,000</del><span class="price-unit"><sup>vnd</sup></span></p>
        </div> --}}
    </div>
     <div class="cart-now btn-to-do-course mt-10">
         <a href="javascript:void(0)" onclick="addToCart({{ $product->MAKH }})" class="btn-course">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
             Thêm vào giỏ hàng
         </a>
     </div>
 </div>
<section id="course-detail">
    <div class="course-detail-header">
        <div class="container">
           <div class="title-des">
            <div class="name-course-detail">
                <h1>{{$product->TENKH}}</h1>
            </div>
            <div class="des-course-short">
                <p>{{$product->GIOITHIEUKH}}</p>
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
                            <span class="num-rate">25 đánh giá</span>
                        </p>
                </div>
                <div class="nums-student">
                    <span class="icon-student">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        2 Học viên
                    </span>
                </div>
            </div>
        </div>

    </div>
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

        {{-- INTRO COURSE STARTS --}}
            <section id="intro-course " class="mt-10">
               <div class="container">
               <div class="intro-course-des">
                <div class="intro-title intro-header">
                    <h3>Giới thiệu khóa học</h3>
                </div>
                <div class="intro-body">
                    <p class="intro-body-header"><strong>
                        Giới thiệu khóa học “{{$product->TENKH}}”:</strong>
                    </p>
                    <p class="intro-body-content">
                        {{$product->CHITIETKH}}
                    </p>
                </div>
               </div>
               </div>
            </section>
        {{-- INTRO COURSE ENDS --}}

        {{-- CONTENT COURSE START --}}
            <section id="content-course" class="mt-10">
                <div class="container">
                <div class="intro-course-des">
                 <div class="intro-title intro-header">
                     <h3>Nội dung khóa học</h3>
                 </div>
                 <div class="intro-body">
                    {{-- <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            1. Giới thiệu và cài đặt
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
                            <div class="accordion-body">
                                <ul class="list-lesson">
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            000 - Tài liệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            001 - Giới thiệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            002 - Cài đặt và chạy thử
                                        </span>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            2.  So sánh định dạng SASS và SCSS
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" >
                            <div class="accordion-body">
                                <ul class="list-lesson">
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            000 - Tài liệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            001 - Giới thiệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            002 - Cài đặt và chạy thử
                                        </span>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          3. 5 tính năng chính của SASS
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" >
                            <div class="accordion-body">
                                <ul class="list-lesson">
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            000 - Tài liệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            001 - Giới thiệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            002 - Cài đặt và chạy thử
                                        </span>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFourth">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                               4. Bắt đầu project thực tế
                            </button>
                          </h2>
                          <div id="collapseFourth" class="accordion-collapse collapse" aria-labelledby="headingFourth" >
                            <div class="accordion-body">
                                <ul class="list-lesson">
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            000 - Tài liệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            001 - Giới thiệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            002 - Cài đặt và chạy thử
                                        </span>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFifth">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false" aria-controls="collapseFifth">
                               5. HTML và SASS cho phần top của website
                            </button>
                          </h2>
                          <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth" >
                            <div class="accordion-body">
                                <ul class="list-lesson">
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            000 - Tài liệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            001 - Giới thiệu khóa học
                                        </span>
                                    </li>
                                    <li>
                                        <span class="lesson-icon-play">
                                            <img src="https://media-kyna.cdn.vccloud.vn/img/play.svg" alt="Kyna" width="20px" height="20px">
                                        </span>
                                        <span class="lesson-title">
                                            002 - Cài đặt và chạy thử
                                        </span>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                      </div>--}}
                 </div>
                </div>
                </div>
             </section>
         {{-- CONTENT COURSE ENDS --}}


         {{-- RATE COURSE STARTS --}}
            <section id="rate-course" class="mt-10">
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
             </section>
        {{-- RATE COURSE ENDS --}}

        {{-- RELATED SCIENCE START --}}
            {{-- <section class="related-course mt-10">
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
                    <div class="container">
                        <ul class="swiper list-related-courses list-course mw-70p">
                            <div class="swiper-wrapper">
                                @foreach ($relatedCourse as $relaCourse)
                                <li class="swiper-slide list-related-course list-item">
                                    <a href="" class="course-box">
                                        <div class="img-course">
                                                <img class="img-responsive "
                                                src="{{asset('user/assets/imgCourse')}}/{{$relaCourse->ANH}}"
                                                alt="{{$relaCourse->TENKH}}">
                                        </div>
                                        <div class="course-des">
                                            <div class="name-course">
                                                <h4>{{$relaCourse->TENKH}} </h4>
                                            </div>
                                            <div class="name-teacher d-flex flex-space">
                                                <p class="">{{$relaCourse->HOTEN}}</p>
                                                <div class="price price-discount">
                                                    <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                                </div>
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




                            </div>
                            <div class="swiper-pagination"></div>
                        </ul>
                        <div class="swiper-button-next btn-next-free-course"></div>
                        <div class="swiper-button-prev btn-prev-free-course"></div>
                    </div>
                </div>
            </section> --}}
         {{-- RELATED SCIENCE END --}}
     </div>
</section>






