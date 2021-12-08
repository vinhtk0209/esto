    <!-- HEADER STARTS -->
    <header class="header">
        <nav id="navDesktop" class="navbar navbar-light header-wrap">
            <!--CONTAINER STARTS-->
            <div class="container">
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

                                <form id="search-form" action="" method="">
                                    <div class="input-group">
                                        <input id="live-search-bar" name="q" type="text"
                                            class="form-control live-search-bar"
                                            placeholder="Nhập tên khóa học/giảng viên" autocomplete="off">
                                        <button class="search-button" type="submit">

                                            <img src="{{asset('user/assets/img/search-icon.svg')}}" width="20"
                                                height="20" alt="Khóa học trực tuyến">

                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="nav head-direction">
                            <div class="nav-item nav-item-cart">
                                <div class="k-header-info header-cart">
                                    <div class="cart dropdown">
                                        <a href="" class="dropdown-toggle cart_anchor">
                                            <img src="{{asset('user/assets/img/cart.svg')}}" width="24"
                                                height="24" alt="Khóa học trực tuyến">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="nav-item right-line">
                                <a class="nav-link cod-btn" href="">Kích hoạt khóa học</a>
                            </div>
                            <div class="nav-item">
                                @if (!Session::has('customer'))
                                    <a href="{{route('login.register')}}" class="register-btn">Đăng
                                        ký</a>
                                    <a href="{{route('login.login')}}" class="login-btn">Đăng
                                        nhập</a>
                                @else
                                    <a href="javascript:void(0)" class="register-btn">{{ Session::get('customer')->HOTEN }}</a>
                                    <a href="{{route('logout')}}" class="login-btn">Đăng xuất</a>
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
