<!DOCTYPE html>
<html lang="en">

<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap">
    <base href="{{asset('')}}">
	<!--===============================================================================================-->
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/vendor/animate/animate.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/vendor/css-hamburgers/hamburgers.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/vendor/vendor/animsition/css/animsition.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/vendor/select2/select2.min.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/vendor/daterangepicker/daterangepicker.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/css/loading.css')}}">
	<!--===============================================================================================-->
    <link rel="stylesheet" href="{{('./login/assets/css/util.css')}}">
    <link rel="stylesheet" href="{{('./login/assets/css/main.css')}}">
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



	<div class="limiter" style="background-image: url('{{('./login/assets/images/bg-01.jpg')}}');">
		<div class="container-login100" style="background-image: url({{('./login/assets/images/bg-01.jpg')}} );">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form" method="POST" action="{{ route('post.login') }}">
					@csrf
					<span class="login100-form-title p-b-49">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Không được để trống trường này">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Email..." required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Không được để trống trường này">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu..." required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

                    {{-- @if (Session::has('wrongInfo'))
                       <span class="error-message">{{Session::get('wrongInfo')}}</span>
                   @endif --}}
                   <div class="text-right p-t-8 ">
                        <a href="{{route('login.forgotPass')}}">
                        Quên mật khẩu?
                        </a>
                    </div>

					<div class="text-right p-t-8 p-b-20">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Đăng nhập
							</button>
						</div>
					</div>

					  <div class="txt1 text-center p-t-20 p-b-20">
						<span>
							Hoặc đăng nhập với
						</span>
					</div>
				</form>

                    <div class="flex-c-m">
                        <a href="{{url('/login-facebook')}}" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="{{url('/login-google')}}" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>

                    <div class="flex-col-c p-t-10">
                        Chưa có tài khoản?
                        <a href="{{route('login.register')}}" class="txt2">
                            Đăng ký
                        </a>
                    </div>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
    <script src="{{('./login/assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{('./login/assets/vendor/animsition/js/animsition.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{('./login/assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{('./login/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{('./login/assets/vendor/select2/select2.min.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{('./login/assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{('./login/assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{('./login/assets/vendor/countdowntime/countdowntime.js')}}"></script>
	<!--===============================================================================================-->
    <script src="{{('./login/assets/js/main.js')}}"></script>
</body>

</html>
