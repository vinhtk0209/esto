<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <base href="{{asset('')}}">
    <link rel="stylesheet" href="{{('public/register/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{('public/register/assets/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{('public/register/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{('public/register/assets/css/loading.css')}}">
</head>

<body class="preLoading">
    <div class="load">
        <div class="double-loading">
            <div class="c1"></div>
            <div class="c2"></div>
        </div>
    </div>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content p-y-5">
                    <form method="POST" id="signup-form" class="signup-form" action="{{ route('post.register') }}">
                        @csrf
                        <h2 class="form-title mb-10">Đăng ký</h2>
                        <div class="form-group">
                            <label for="fullname" class="label-input">Họ tên</label>
                            <input type="text" class="form-input" name="fullname" id="fullname"
                                placeholder="Họ tên..." required/>
                            <span class="error-message">@error('fullname'){{$message}}@enderror</span>
                        </div>
                        <!-- <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name"
                                placeholder="Tên đăng nhập..." />
                        </div> -->
                        <div class="form-group">
                            <label for="email" class="label-input">Email</label>
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email..." required/>
                            <span class="error-message">@error('email'){{$message}}@enderror</span>
                        </div>
                        {{-- <div class="form-group">
                            <label for="birthday" class="label-input">Ngày sinh</label>
                            <input type="date" class="form-input" name="birthday" id="birthday" required/>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="male" class="label-input">Giới tính</label>
                            <div class="form-checkbox">
                                <input type="radio" class="form-checkbox" name="gender" id="male" value="1" checked/>
                                <label for="male" class="">Nam</label>
                                <input type="radio" class="form-checkbox" name="gender" id="female" value="0" />
                                <label for="female" class="">Nữ</label>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="phonenumber" class="label-input">Số điện thoại</label>
                            <input type="text" class="form-input" name="phonenumber" id="phonenumber"
                                placeholder="Số điện thoại..." required/>
                                <span class="error-message">@error('phonenumber'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="label-input">Mật khẩu</label>
                            <input type="password" class="form-input" name="password" id="password"
                                placeholder="Mật khẩu,lớn hơn 6 ký tự..." required/>
                            <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            <span class="error-message">@error('password'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="re_password" class="label-input">Nhập lại mật khẩu</label>
                            <input type="password" class="form-input" name="re_password" id="re_password"
                                placeholder="Nhập lại mật khẩu..." required/>
                            <span class="error-message">@error('re_password'){{$message}}@enderror</span>
                        </div>
                        <!-- <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div> -->
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="đăng ký" />
                        </div>
                    </form>
                    <p class="loginhere">
                        Đã có tài khoản ? <a href="{{route('login.login')}}" class="loginhere-link">ĐĂNG NHẬP</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->

    <script src="{{('public/register/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('public/register/assets/js/main.js')}}"></script>
       <!-- JS -->
</body>

</html>
