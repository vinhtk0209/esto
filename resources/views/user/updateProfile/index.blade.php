<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật thông tin cá nhân</title>
    <link rel="stylesheet" href="{{asset('register/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('register/assets/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('register/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('register/assets/css/loading.css')}}">
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
            <div class="container">
                <div class="signup-content p-y-5">
                    <form method="POST" id="signup-form" class="signup-form" action="{{ route('post.update.profile',['id' => $user->ID]) }}">
                        @csrf
                        <h2 class="form-title mb-10">Cập nhật thông tin cá nhân</h2>
                        <div class="form-group">
                            <label for="fullname" class="label-input">Họ tên</label>
                            <input type="text" class="form-input" name="fullname" id="fullname"
                                placeholder="Họ tên..." value="{{ $user->HOTEN }}" required/>
                            <span class="error-message">@error('fullname'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber" class="label-input">Số điện thoại</label>
                            <input type="text" class="form-input" name="phonenumber" id="phonenumber"
                                placeholder="Số điện thoại..." value="{{ $user->SODIENTHOAI }}" required/>
                                <span class="error-message">@error('phonenumber'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="cập nhật" />
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->

    <script src="{{asset('register/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('register/assets/js/main.js')}}"></script>
       <!-- JS -->
</body>

</html>
