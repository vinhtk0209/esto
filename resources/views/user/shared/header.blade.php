<!-- HEADER STARTS -->
<header class="header">
    <nav id="navDesktop" class="navbar navbar-light header-wrap">
        <!--CONTAINER STARTS-->
        <div class="container d-block">
            <div class="navbar-wrap">
                <div class="navbar-top">
                    <div class="navbar-top-left">
                        <div class="navbar-brand logo">
                            <!-- LOGO -->
                            <h1>
                                <a href="{{ route('home.index') }}" class="name-web"> ESTO</a>
                            </h1>
                            <!-- END LOGO -->
                        </div>
                        <div class="form-inline header-search">
                            <form id="search-form" action="{{ route('home.search') }}" method="POST">

                                @csrf
                                <div class="input-group ">
                                    <div class="search-input position-relative">
                                        <input id="live-search-bar" name="q" type="text"
                                        class="form-control live-search-bar"
                                        placeholder="Nhập tên khóa học/giảng viên" autocomplete="off" required>

                                    {{-- SEARCH AJAX STARTS --}}
                                    <div class="search-ajax-result position-absolute ">



                                    </div>
                                    {{-- SEARCH AJAX ENDS --}}

                                    </div>

                                    <button class="search-button" type="submit">
                                        <img src="{{('./user/assets/img/search-icon.svg')}}" width="20"
                                            height="20" alt="Khóa học trực tuyến">
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="nav head-direction">
                        <div class="nav-item">
                            <div class="k-header-info header-cart">
                                <a href="{{ route('home.cart') }}">
                                    <img src="{{('./user/assets/img/cart.svg')}}" width="24"
                                        height="24" alt="Khóa học trực tuyến">
                                        <span id="qty_cart">{{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }}</span>
                                </a>
                            </div>
                        </div>
                        <div class="nav-item right-line">
                            <button class="nav-link cod-btn btn-show-test " href="" id="test-room" >Vào phòng thi</button>
                        </div>
                        <div class="nav-item ">
                            @if (!Session::has('customer'))
                                <a href="{{route('login.register')}}" class="register-btn">Đăng
                                    ký</a>
                                <a href="{{route('login.login')}}" class="login-btn">Đăng
                                    nhập</a>
                            @else
                                <div class="drop-info-user-container">
                                    <div class="user-info-header dropdown ">
                                        <a href="#" class="drop-info-user " data-bs-toggle="dropdown" role="button" >
                                            <span class="user">
                                                Xin chào!
                                            </span>
                                            {{ Session::get('customer')->HOTEN }}
                                        </a>
                                        <span class="carpet"></span>
                                    </div>
                                    {{-- DROP INFO --}}
                                    <div class="dropdown-menu">
                                        <ul class="dropdown-menu-list " >
                                            <li class="dropdown-item">
                                                <a href="{{ route('update.profile') }}">
                                                    <i class="fas fa-edit"></i>
                                                    Chỉnh sửa thông tin
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('show.my.course') }}">
                                                    <i class="fas fa-list-alt"></i>
                                                    Khoá học của tôi
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('show.my.score') }}">
                                                    <i class="fas fa-eye"></i>
                                                    Bài làm của tôi
                                                </a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{route('logout')}}">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    Đăng xuất
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="drop-info-user-ava">
                                        {{-- @php
                                        // function checkForImage($url){
                                        //     $subject = $url;
                                        //     $pattern = "/(http[s]?:)/i";
                                        //     if (preg_match($pattern, $subject, $matches)) {
                                        //         return true;
                                        //     }
                                        //     return false;
                                        //     }


                                            $imgUrl = Session::get('customer')->ANHDAIDIEN;
                                            $nameUser=Session::get('customer')->HOTEN;
                                            // if (checkForImage($imgUrl)){
                                            //     echo "<img src='$imgUrl' class='showAva img-responsive' alt='$nameUser'>";
                                            // }
                                            // else{
                                                echo "<img src='./user/assets/imgAva/$imgUrl' class='showAva img-responsive' alt='$nameUser '>";
                                            // }
                                        @endphp --}}
                                        @if(Session::get('customer')->ANHDAIDIEN!='')
                                          <img src='{{Session::get('customer')->ANHDAIDIEN}}' class='showAva img-responsive' alt='{{Session::get('customer')->HOTEN}} '>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--CONTAINER ENDS-->
    </nav>
</header>
<!-- HEADER ENDS -->
