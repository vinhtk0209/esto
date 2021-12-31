<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="{{('./register/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{('./register/assets/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{('./register/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{('./register/assets/css/loading.css')}}">
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
                <div class="signup-content">
                    {{-- action="{{route('taikhoan.postGetPass') }}" --}}
                    <form method="POST" id="signup-form" class="signup-form"  >
                        @csrf
                        <h2 class="form-title">Đặt lại mật khẩu</h2>
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

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Đặt lại mật khẩu" />
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </div>

    <!-- JS -->

    <script src="{{('./register/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('./register/assets/js/main.js')}}"></script>
       <!-- JS -->
</body>

</html>
