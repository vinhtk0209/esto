<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>TRANG QUAN TRI</title>
    <!-- Favicon -->
    <base href="{{asset('')}}">
    <link rel="icon" href="./admin_assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="./admin_assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="./admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="./admin_assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Chào mừng đến với ESTO!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            {{-- <div class="text-muted text-center mt-2 mb-3">Login</div> --}}
                            <form role="form" action="admin" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email..." name="EMAIL" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Mật khẩu..." name="MATKHAU" type="password">
                                    </div>
                                </div>
                                @if (Session::has('thongbao'))
                                      <span class="error-message ">{{Session::get('thongbao')}}</span>
                                 @endif
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="./admin_assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./admin_assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="./admin_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="./admin_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="./admin_assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
