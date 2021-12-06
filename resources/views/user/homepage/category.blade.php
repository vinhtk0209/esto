<section class="category ">
    <div class="container">
        <div class="d-flex flex-wrap flex-space">
            <ul class="list-category">
                @foreach ($data as $value)
                <li class="list-item">
                    <a href="">
                        {{$value->TENDM}}
                    </a>
                    {{-- <ul class="sub-menu-category">
                        @foreach ($value->childCategory as $item)
                            <li class="sub-menu-item active">
                                <a href="">{{$item->TENDMC}}</a>
                            </li>
                        @endforeach --}}

                        {{-- <li class="sub-menu-item">
                            <a href="">Tiếng pháp</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Tiếng trung</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Tiếng nhật</a>
                        </li> --}}
                    {{-- </ul> --}}
                </li>
                @endforeach



                {{-- <li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/126/img/menu_icon-1595588118.png"
                            alt="">
                        It và lập trình
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Quản trị mạng</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">IT</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Lập trình web</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Lập trình ứng dụng</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/114/img/menu_icon-1595841675.png"
                            alt="">
                        Hành chính nhân sự
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Quản trị nhân sự</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Tuyển dụng</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Đào tạo và phát triển</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Lập trình ứng dụng</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/150/img/menu_icon-1595822423.png"
                            alt="">
                        Tài chính kế toán
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Thuế</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Kế toán</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Tài chính</a>
                        </li>

                    </ul>
                </li>
                <li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/168/img/menu_icon-1595842434.png"
                            alt="">
                        Đời sống
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Yoga</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Sức khỏe</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Ẩm thực</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Nhiếp ảnh</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Thời trang-làm đẹp</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Âm nhạc</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Nghệ thuật</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Phong thủy</a>
                        </li>
                    </ul>
                </li>
                <li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/111/img/menu_icon-1595833302.png"
                            alt="">
                        Ứng dụng phần mềm
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Excel</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Word</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Powerpoint</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Python</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Photoshop</a>
                        </li>

                    </ul>
                </li>
                <li class="list-item">
                    <a href="">
                        <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/152/img/menu_icon-1595822848.png"
                            alt="">
                        Thiết kế đồ hoạ
                    </a>
                    <ul class="sub-menu-category">
                        <li class="sub-menu-item active">
                            <a href="">Thiết kế</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Kỹ xảo</a>
                        </li>
                        <li class="sub-menu-item">
                            <a href="">Dựng phim</a>
                        </li>

                    </ul>
                </li>
                <li class="list-item">
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
                    <div class="swiper-slide"><img src="{{asset('public/user/assets/img/slide-3.png')}}">
                    </div>
                    <div class="swiper-slide"><img src="{{asset('public/user/assets/img/slide-4.png')}}">
                    </div>
                    <div class="swiper-slide"><img src="{{asset('public/user/assets/img/slide-5.png')}}"></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
