<section class="category ">
    <div class="container">
        <div class="d-flex flex-wrap flex-space">
            <ul class="list-category">
                @foreach ($cateCourse as $cate)
                <li class="list-item">
                    <a href="{{URL::to('/listCourse/' . $cate->MADM)}}">
                        {{$cate->TENDM}}
                    </a>
                    <ul class="sub-menu-category">
                        @foreach ($cate->childCategory as $value)
                            <li class="sub-menu-item active">
                                <a href="{{URL::to('/listCourse/' . $value->MADM)}}">{{$value->TENDM}}</a>
                            </li>
                        @endforeach
                     </ul>
                </li>
                @endforeach
             {{--<li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/218/img/menu_icon-1597659127.png"
                            alt="">
                        Kỹ năng công việc
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Thuyết trình</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Nâng cao hiệu suất</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Giải quyết vấn đề</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Tư duy công việc</a>
                        </li>

                    </ul>
                </li> --}}
            </ul>
            <div class="swiper slide-category">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="{{asset('user/assets/img/slide-3.png')}}">
                    </div>
                    <div class="swiper-slide"><img src="{{asset('user/assets/img/slide-4.png')}}">
                    </div>
                    <div class="swiper-slide"><img src="{{asset('user/assets/img/slide-5.png')}}"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
