{{-- BUY COURSE STARTS --}}

<div class="buy-course">
    <div class="img-course">
        <img class="img-responsive "
        @foreach ($productDetail as $product)
        src="{{('./user/assets/imgCourse')}}/{{$product->ANH}}"
        alt="{{$product->TENKH}}">
    </div>
    <div class="price-container ">
        @php($tien = 0)
        @foreach($listKM as $km)
            @if($km->MAKH == $product->MAKH)
                @php($tien = 1)
            @endif
        @endforeach
        @if($tien == 1)
            <p class="price price-discount"><del>{{number_format($product->DONGIA)}}</del><span class="price-unit"><sup>vnd</sup></span></p>
            <p class="main-price">{{number_format($product->DONGIA-($product->DONGIA*$km->TYLEKM/100))}}<span class="price-unit"><sup>vnd</sup></span></p>
        @else
            <div class="main-price">
                <p>{{number_format($product->DONGIA)}}<span class="price-unit"><sup>vnd</sup></span></p>
            </div>
        @endif

        {{-- <div class="price price-discount">
            <p><del>600,000</del><span class="price-unit"><sup>vnd</sup></span></p>
        </div> --}}
    </div>
    <div class="cart-now btn-to-do-course mt-10">
        @if ($product->TRUCTUYEN == 0)
        <a href="javascript:void(0)" onclick="addToCart('{{ $product->MAKH }}')" class="btn-course">
            <i class="fa fa-cart-plus" aria-hidden="true"></i>
            Thêm vào giỏ hàng
        </a>
        @else
            @if (Session::has('customer'))
                <a href="javascript:void(0)" onclick="" class="btn-course btn-buy-class" id="btn-buy-class">
                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                    Mua lớp học
                </a>
            @else
                <a href="{{ route('login.login') }}" class="btn-course">
                    Vui lòng đăng nhập
                </a>
            @endif
        @endif
    </div>
 </div>

 <!--MODAL STARTS -->
 <div class="modal-custom-class">
    <div class="modal-custom-class-container">
        <div class="modal-custom-close">
            <span class="btn-custom-class-close ">X</span>
        </div>
        <header class="modal-custom-header">
            <h2 class="modal-custom-title"> Chọn lớp học</h2>
        </header>
        <div class="modal-custom-body">
            <form method="POST" action="{{ route('post.buyClass',['id' => $product->MAKH]) }}" id="checkout-form">
                @csrf

                <input type="hidden" name="email" value="{{ Session::get('customer')->EMAIL ?? '' }}" />
                <input type='hidden' name='currency_code' value='VND'>
                <div class="form-group">
                    <label for="code-to-test" class="label-custom">Danh sách lớp học:</label>
                    <select class="form-select"   style="height:46px" aria-label="Default select example" name="listClass" id="listClass">
                        @if (!empty($classRoom))
                            @foreach ($classRoom as $class)
                                <option value="{{$class->MALH}}">{{$class->TENLOP}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="num-card" class="label-custom">Số thẻ</label>
                    <div class="form-group-input position-relative flex-grow-1">
                        <input type="text" placeholder="Nhập số thẻ" id="card-number" class="effect-7 form-input w-100 " required >
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label-custom">Hạn mức tháng</label>
                    <div class="form-group-input position-relative flex-grow-1">
                        <input type="number" placeholder="Nhập số thẻ" id="card-expiry-month"   min=1 max=12  class="effect-7 form-input w-100 " required>
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label-custom">Hạn mức năm</label>
                    <div class="form-group-input position-relative flex-grow-1">
                        <input type="number" placeholder="Nhập số thẻ" id="card-expiry-year" min=2022 max=2030   class="effect-7 form-input w-100 " required>
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="label-custom">CVC</label>
                    <div class="form-group-input position-relative flex-grow-1">
                        <input type="text" placeholder="Nhập CVC" id="card-cvc"  class="effect-7 form-input w-100 " required>
                        <span class="focus-border">
                            <i></i>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <input  type="submit" id="btn-to-test" class="btn-to-test mt-20" name="btnSubmit" value="Mua lớp học" >
                </div>
            </form>
        </div>
    </div>
</div>
<!-- MODAL ENDS -->
{{-- BUY COURSE ENDS --}}


{{-- COURSE DETAIL STARTS --}}
<section id="course-detail">
    {{-- COURSE DETAIL HEADER STARTS --}}
    <div class="course-detail-header">
            <div class="container">
                <div class="title-des">
                    <div class="name-course-detail">
                        <h1>{{$product->TENKH}} </h1>
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
                        <div class="d-flex align-items-center">
                            <div class="rateYo"   data-rating="{{$rating}}"></div>
                            <span class="num-rate"> ({{$countRate}} đánh giá)</span>
                        </div>
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
                    <h3>Thông tin lớp học</h3>
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
                    @foreach ($classRoom as $class)
                        <div class="intro-class">
                            <div class="intro-class-item d-flex">
                                <span class="font-weight-bold mr-5">Tên lớp : </span>
                                <span class="mr-5">{{$class->TENLOP}}</span>
                                 <a href="{{URL::to('/contentClass/'.$class->MALH)}}">(Xem chi tiết)</a>
                            </div>
                           <div class="intro-class-item d-flex ">
                              <span class="font-weight-bold mr-5">Số lượng học viên :</span> <p> {{$class->SLGIOIHAN}}</p>
                           </div>
                          <div class="intro-class-item d-flex">
                            <span class="font-weight-bold mr-5">Thời gian bắt đầu :</span> <p> {{$class->NGAYMOLOP}}</p>
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
     @if(session()->has('customer') && $customerJoinCourse)
     <div id="rate-course" class="mt-10">
        <div class="container">
            <div class="intro-course-des">
                <div class="intro-title intro-header">
                    <h3>Đánh giá khóa học </h3>
                </div>
                <div class="intro-body" id="comments">
                    <div class="col-sm-12">
                        <div id="listComment" class="list-comment">
                            @foreach ($comments as $comment)
                                <div class="row style-comment p-2">
                                    <div class="col-md-3 ">
                                            <div class="info-comment-container">
                                                    <div class="d-flex">
                                                        <img width="30%" src=" {{ empty($comment->ANHDAIDIEN) ? asset('images/avatar.png') : asset('storage/'. $comment->ANHDAIDIEN)}}" alt="ESTO" class="img img-responsive ">
                                                    <div>
                                                        <span class="star-rate mb-auto ms-2">
                                                            @if ($comment->SOSAO)
                                                                @for( $i = 1 ; $i <= $comment->SOSAO; $i++)
                                                                <i class="fas fa-star star-color"></i>
                                                                @endfor
                                                            @endif
                                                        </span>
                                                    </div>
                                                    </div>
                                                <p style="color: #000;">{{$comment->NGAYDG}}</p>
                                            </div>
                                    </div>
                                    <div class="col-md-9">
                                        <strong class="mb-auto">{{$comment->HOTEN}}</strong>

                                        <p>{{$comment->NOIDUNG}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                           <div class="form-comment-container ">
                                <form action="{{route('send-comment-ajax')}}" method="POST" id="sendCommentForm" >
                                    @csrf
                                    <input type="hidden" name="MAKH" value="{{$productId}}"/>
                                    <input type="hidden" name="MAHV" value="{{$idHvrandom}}"/>
                                   <div class="d-flex align-items-center">
                                    <p class="text-success"><strong>Nhận xét của học viên : </strong></p>
                                        <div class="rating">
                                            <label>
                                            <input type="radio" name="SOSAO" value="1" id="start_1" />
                                            <span class="icon" style="font-size:30px">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="SOSAO" value="2" id="start_2"/>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="SOSAO" value="3" id="start_3"/>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="SOSAO" value="4" id="start_4"/>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            </label>
                                            <label>
                                            <input type="radio" name="SOSAO" value="5" id="start_5"/>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            <span class="icon" style="font-size:30px">★</span>
                                            </label>
                                        </div>
                                   </div>
                                    <textarea name="NOIDUNG" id="commentContent" class="comment_content" onkeyup="isEmptyContentComment()" style="width: 754px; height: 200px; " required></textarea >

                                    <button type="button" class="btn btn-success pull-right " id="sendComment" onclick="submitComment()" disabled >Gửi đánh giá</button>
                                    <br/>
                                    <br/>
                                    <br/>
                                </form>
                           </div>

                    </div>
                </div>
                {{-- <div class="intro-body">
                    <div class="rate-course-summary">
                        <span class=""></span>
                    <div class="rate-course-rating-containerate-course-ratingnumberr">
                        <b>Đánh giá sao:
                            <span class="star-rate">
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                            <i class="fas fa-star star-color"></i>
                        </span>
                        </b>
                        <span class="num-rate">

                        </span>

                    </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    @else
    <div id="rate-course" class="mt-10">
        <div class="container" >
            <div class="intro-course-des">
                <div class="intro-title intro-header">
                    <h3>Đánh giá khóa học</h3>
                </div>
                <div class="intro-body">
                    <div class="rate-course-summary">
                    <div class="rate-course-rating-containerate-course-ratingnumberr">
                        <p class="text-danger text-center fw-bold">Bạn chưa được phép đánh giá!</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif
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
