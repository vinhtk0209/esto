<!DOCTYPE html>
<html lang="en">

<head>
	<title>Xác nhận email</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap">
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
                <strong> {{Session::get('haveActived')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

	<div class="limiter" style="background-image: url('{{asset('login/assets/images/bg-01.jpg')}}');">
		<div class="container-login100" style="background-image: url('{{asset('login/assets/images/bg-01.jpg')}}');">
			<div class="wrap-login100 ">
				<form class="login100-form validate-form" method="POST" >
					@csrf
					<span class="login100-form-title pb-20">
						Xác nhận tài khoản
					</span>
						<span class="label-input100 label-confirm-email">Đã gởi email xác nhận về email của bạn vui lòng xác nhận để tiếp tục</span>
				</form>
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
