<!DOCTYPE html>
<html lang="en">

<head>
	<title>Quên mật khẩu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap">
	<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/vendor/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/css/loading.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{asset('login/assets/css/util.css')}}">
    <link rel="stylesheet" href="{{asset('login/assets/css/main.css')}}">
	<!--===============================================================================================-->
</head>

<body class="preLoading">
	<div class="load">
		<div class="double-loading">
			<div class="c1"></div>
			<div class="c2"></div>
		</div>
	</div>

        @if (Session::has('haveActived'))
            <div class="alert alert-success alert-dismissible m-0 fade show" role="alert">
                <strong> {!!Session::get('haveActived')!!}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (Session::has('noActive'))
         <div class="alert alert-warning alert-dismissible m-0 fade show" role="alert">
            <strong> {!!Session::get('noActive')!!}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif

	<div class="limiter" style="background-image: url('{{asset('login/assets/images/bg-01.jpg')}}');">
		<div class="container-login100" style="background-image: url('{{asset('login/assets/images/bg-01.jpg')}}');">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form" method="POST" action="{{ route('login.postForgotPass') }}">
					@csrf
					<span class="login100-form-title p-b-20">
						Lấy lại mật khẩu
					</span>

                    <h5 class="p-b-20 text-center ">
						Vui lòng nhập email đã đăng ký vào tài khoản chúng tôi
					</h5>

					<div class="wrap-input100 validate-input m-b-23 p-t-1" data-validate="Không được để trống trường này">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email..." required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <span class="error-message">@error('email'){{$message}}@enderror</span>
                    
					<div class="text-right p-t-8 p-b-20">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Gởi email xác nhận
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
    <script src="{{asset('login/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{asset('login/assets/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{asset('login/assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('login/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{asset('login/assets/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{asset('login/assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('login/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{asset('login/assets/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{asset('login/assets/js/main.js')}}"></script>
</body>

</html>
