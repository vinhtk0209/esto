<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap"
        rel="stylesheet">
    <link type="text/css" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
    <link rel="stylesheet" href="{{asset('public/user/assets/css/main.css')}}">
    <!-- <link rel="stylesheet" href="./assets/css/app.css"> -->
    <link rel="stylesheet" href="{{asset('public/user/assets/css/app.css')}}">
    <!-- <link rel="stylesheet" href="./assets/sweetalert/alert.min.css"> -->

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- SWIPER -->
    <!-- BOOTSTRAP  -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <!-- BOOTSTRAP  -->
    <!-- CUSTOM CSS -->
    <!-- <link rel="stylesheet" href="./assets/css/custom.css"> -->
    <link rel="stylesheet" href="{{asset('public/user/assets/css/custom.css')}}">
    <!-- CUSTOM CSS -->
    <title>ESTO</title>
</head>

<body class="preLoading">
    <!-- LOADING STARTS-->
    <div class="load">
        <div class="double-loading">
            <div class="c1"></div>
            <div class="c2"></div>
        </div>
    </div>
    <!-- LOADING ENDS-->

    <!-- HEADER STARTS -->
    @include('user.shared.header')
    <!-- HEADER ENDS -->

    <!-- SECTION CATEGORY STARTS -->

    <!-- SECTION CATEGORY ENDS -->

    <!-- SECTION BEST-SELLER STARTS -->
    @yield('content')
    <!-- SECTION TOP-SELLER ENDS -->

    <!-- SECTION SPECIAL OFFER COURSE STARTS-->

    <!-- SECTION SPECIAL OFFER COURSE ENDS-->

    <!-- SECTION FREE COURSE STARTS -->

    <!-- SECTION FREE COURSE ENDS -->

    <!-- SECTION ENGLISH COURSE STARTS -->

    <!-- SECTION ENGLISH COURSE ENDS -->

    <!-- FOOTER STARTS -->
    @include('user.shared.footer')
    <!-- FOOTER ENDS -->

    <!--  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="./assets/js/main.js"> -->
    <script src="{{asset('public/user/assets/js/main.js')}}">
    </script>
</body>

</html>
