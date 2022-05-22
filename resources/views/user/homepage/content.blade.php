   <!-- SECTION BEST-SELLER STARTS -->
    <section class="best-seller mb-16">
       <div class="best-seller-head">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <h3 class="title-course">Sản phẩm mới nhất</h3>
                   </div>
               </div>
           </div>
       </div>
       <div class="best-seller-body">
           <div class="container">
               <ul class="list-best-seller-courses list-course d-flex flex-wrap">
                @foreach ($listCourse as $course)
                @php($tien = 0)
                @foreach($listKM as $km)
                    @if($km->MAKH == $course->MAKH)
                        @php($tien = 1)
                    @endif
                @endforeach
               <li class="list-best-seller list-item">
                   <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="course-box">
                       <div class="img-course">
                           <img class="img-responsive "
                                src="{{('./user/assets/imgCourse')}}/{{$course->ANH}}"
                               alt="{{$course->TENKH}}">
                        </div>
                        <div class="course-des">
                            <div class="name-course">
                                <h4>{{$course->TENKH}}</h4>
                            </div>

                            <div class="name-teacher d-flex flex-space">
                                <p class="">{{$course->HOTEN}}</p>
                                @if($tien == 1)
                                <div class="price price-discount">
                                    <p><del>{{number_format($course->DONGIA)}}</del><span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                                @endif
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
                               @if($tien == 1)
                                <p>{{number_format($course->DONGIA-($course->DONGIA*$km->TYLEKM/100))}}<span class="price-unit"><sup>vnd</sup></span></p>
                               @else
                                <p>{{number_format($course->DONGIA)}}<span class="price-unit"><sup>vnd</sup></span></p>
                               @endif
                            </div>
                       </div>
                   </a>
               </li>
               @endforeach
                   {{-- <li class="list-best-seller list-item">
                       <a href="" class="course-box">
                           <div class="img-course">
                               <img class="img-responsive "
                                   src="https://static.unica.vn/upload/images/2019/04/quan-tri-cuoc-doi-le-tham-duong_m_1555575906.jpg"
                                   alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                           </div>
                           <div class="course-des">
                               <div class="name-course">
                                   <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                               </div>
                               <div class="name-teacher d-flex flex-space">
                                   <p class="">Vinh Nguyen</p>
                                   <div class="price price-discount">
                                       <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
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
                                   <p>700.000 <span class="price-unit"><sup>vnd</sup></span></p>
                               </div>
                           </div>
                       </a>
                   </li>--}}
                </ul>
           </div>
       </div>

    </section>
   <!-- SECTION TOP-SELLER ENDS -->

   <!-- SECTION SPECIAL OFFER COURSE STARTS-->
   <section class="english-course  mb-16">
       <div class="english-course -head">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                     <h3 class="title-course">Tiếng anh</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="english-course-body">
        <div class="container">
            <ul class="list-english-course -courses list-course d-flex flex-wrap">
                @foreach ($listEnglishCourse as $course)
                @php($tien2 = 0)
                    @foreach($listKM as $km)
                        @if($km->MAKH == $course->MAKH)
                            @php($tien2 = 1)
                        @endif
                    @endforeach
                <li class="list-best-seller list-item">
                    <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="course-box">
                        <div class="img-course">
                            <img class="img-responsive "
                                src="{{('./user/assets/imgCourse')}}/{{$course->ANH}}"
                                alt="{{$course->TENKH}}">
                        </div>
                        <div class="course-des">
                            <div class="name-course">
                                <h4>{{$course->TENKH}}</h4>
                            </div>

                            <div class="name-teacher d-flex flex-space">
                                <p class="">{{$course->HOTEN}}</p>
                                @if($tien2 == 1)
                                <div class="price price-discount">
                                    <p><del>{{number_format($course->DONGIA)}}</del><span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                                @endif
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
                                @if($tien2 == 1)
                                    <p>{{number_format($course->DONGIA-($course->DONGIA*$km->TYLEKM/100))}}<span class="price-unit"><sup>vnd</sup></span></p>
                                @else
                                    <p>{{number_format($course->DONGIA)}}<span class="price-unit"><sup>vnd</sup></span></p>
                                @endif
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach


                   {{-- <li class="list-special-offer list-item">
                       <a href="" class="course-box">
                           <div class="img-course">
                               <img class="img-responsive "
                                   src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-nhap-mon-chung-khoan_m_1555570756.jpg"
                                   alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                           </div>
                           <div class="course-des">
                               <div class="name-course">
                                   <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                               </div>
                               <div class="name-teacher d-flex flex-space">
                                   <p class="">Vinh Nguyen</p>
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
                                   <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                               </div>
                           </div>
                       </a>
                   </li> --}}

               </ul>
           </div>
       </div>

   </section>
   <!-- SECTION SPECIAL OFFER COURSE ENDS-->

   <!-- SECTION BUSINESS COURSE STARTS -->
    <section class="business-course courses mb-16">
       <div class="business-course-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-course ">kinh doanh online</h3>
                    </div>
                </div>
            </div>
       </div>
        <div class="business-course-body ">
            <div class="container">
                <ul class="swiper list-business-courses list-course  ">
                    <div class="swiper-wrapper">
                        @foreach ($listBusinessCourse as $businessCourse)
                        @php($tien3 = 0)
                        @foreach($listKM as $km)
                            @if($km->MAKH == $businessCourse->MAKH)
                                @php($tien3 = 1)
                            @endif
                        @endforeach
                            <li class="swiper-slide list-business-course list-item">
                                    <a href="{{URL::to('/courseDetail/'.$businessCourse->MAKH)}}" class="course-box">
                                        <div class="img-course">
                                            <img class="img-responsive "
                                                src="{{('./user/assets/imgCourse')}}/{{$businessCourse->ANH}}"
                                                alt="{{$businessCourse->TENKH}}">
                                        </div>
                                        <div class="course-des">
                                            <div class="name-course">
                                                <h4>{{$businessCourse->TENKH}} </h4>
                                            </div>
                                            <div class="name-teacher d-flex flex-space">
                                                <p class="">{{$businessCourse->HOTEN}}</p>
                                                @if($tien3 == 1)
                                                <div class="price price-discount">
                                                    <p><del>{{number_format($businessCourse->DONGIA)}}</del><span class="price-unit"><sup>vnd</sup></span></p>
                                                </div>
                                                @endif
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
                                                @if($tien3 == 1)
                                                <p>{{number_format($course->DONGIA-($course->DONGIA*$km->TYLEKM/100))}}<span class="price-unit"><sup>vnd</sup></span></p>
                                            @else
                                <p>{{number_format($course->DONGIA)}}<span class="price-unit"><sup>vnd</sup></span></p>
                                            @endif
                                            </div>

                                        </div>
                                    </a>
                            </li>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </ul>
                <div class="swiper-button-next btn-next-courses "></div>
                <div class="swiper-button-prev btn-prev-courses "></div>
            </div>
        </div>
   </section>
   <!-- SECTION FREE COURSE ENDS -->

   <!-- SECTION HEALTHY COURSE STARTS -->
   <section class="healthy-course mb-16">
       <div class="healthy-offer-head">
           <div class="container">
               <div class="row">
                   <div class="col-lg-12">
                       <h3 class="title-course">sức khỏe</h3>
                   </div>
               </div>
           </div>
       </div>
       <div class="healthy-body">
           <div class="container">
               <ul class="list-healthy-courses list-course d-flex flex-wrap">
                @foreach ($listHealthyCourse as $course)
                @php($tien4 = 0)
                        @foreach($listKM as $km)
                            @if($km->MAKH == $course->MAKH)
                                @php($tien4 = 1)
                            @endif
                        @endforeach
                <li class="list-best-seller list-item">
                    <a href="{{URL::to('/courseDetail/'.$course->MAKH)}}" class="course-box">
                        <div class="img-course">
                            <img class="img-responsive "
                                src="{{('./user/assets/imgCourse')}}/{{$course->ANH}}"
                                alt="{{$course->TENKH}}">
                        </div>
                        <div class="course-des">
                            <div class="name-course">
                                <h4>{{$course->TENKH}}</h4>
                            </div>

                            <div class="name-teacher d-flex flex-space">
                                <p class="">{{$course->HOTEN}}</p>
                                @if($tien4 == 1)
                                <div class="price price-discount">
                                    <p><del>{{number_format($course->DONGIA)}} </del><span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                                @endif
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
                                @if($tien4 == 1)
                                    <p>{{number_format($course->DONGIA-($course->DONGIA*$km->TYLEKM/100))}}<span class="price-unit"><sup>vnd</sup></span></p>
                                @else
                                    <p>{{number_format($course->DONGIA)}}<span class="price-unit"><sup>vnd</sup></span></p>
                                @endif
                            </div>
                        </div>
                    </a>
                </li>
                @endforeach
                   {{-- <li class="list-special-offer list-item">
                       <a href="" class="course-box">
                           <div class="img-course">
                               <img class="img-responsive "
                                   src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-luyen-thi-ielts-online_m_1555574391.jpg"
                                   alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                           </div>
                           <div class="course-des">
                               <div class="name-course">
                                   <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                               </div>
                               <div class="name-teacher d-flex flex-space">
                                   <p class="">Vinh Nguyen</p>
                                   <div class="price price-discount">
                                       <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
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
                                   <p>700.000 <span class="price-unit"><sup>vnd</sup></span></p>
                               </div>
                           </div>
                       </a>
                   </li> --}}

               </ul>
           </div>
       </div>
   </section>
   <!-- SECTION HEALTHY COURSE ENDS -->

