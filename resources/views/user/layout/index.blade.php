<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}">
       <!-- BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP  -->
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">


    <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
    <link rel="stylesheet" href="public/user/assets/css/main.css">
    <!-- <link rel="stylesheet" href="./assets/css/app.css"> -->
    <link rel="stylesheet" href="public/user/assets/css/app.css">
    <!-- <link rel="stylesheet" href="./assets/sweetalert/alert.min.css"> -->

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- SWIPER -->


    <!-- CUSTOM CSS -->
    <!-- DARKMODE CSS -->
    <link rel="stylesheet" href="public/user/assets/css/darkmode.css" >
    <!-- SEARCH CSS -->
     <link rel="stylesheet" href="public/user/assets/css/search.css" >
    {{-- RANGE JQUERY CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <!-- MODAL CSS -->
    <link rel="stylesheet" href="public/user/assets/css/modal.css" >
    <!-- PAGINATION CSS -->
    <link rel="stylesheet" href="public/user/assets/css/pagination.css" >
    <!-- LOADING CSS -->
    <link rel="stylesheet" href="public/user/assets/css/loading.css">
     <!-- BACKTOP CSS -->
    <link rel="stylesheet" href="public/user/assets/css/backTop.css">
     <!-- COURSE DETAIL CSS -->
    <link rel="stylesheet" href="public/user/assets/css/courseDetail.css">
     <!-- INFO MANAGER CSS -->
    <link rel="stylesheet" href="public/user/assets/css/infoManager.css">
     <!-- LIST COURSE CSS -->
    <link rel="stylesheet" href="public/user/assets/css/listCourse.css">
    <link rel="stylesheet" href="public/user/assets/css/custom.css">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <!-- CUSTOM CSS -->
    <title>ESTO</title>
</head>

<body class="preLoading">


    <!-- SWEETALERT STARTS-->
    @include('sweetalert::alert')
    <!-- SWEETALERT ENDS-->


    <!-- LOADING STARTS-->
    <div class="load">
        <div class="double-loading">
            <div class="c1"></div>
            <div class="c2"></div>
        </div>
    </div>
    <!-- LOADING ENDS-->


    <!--MODAL STARTS -->
    <div class="modal-custom">
        <div class="modal-custom-container">
            <div class="modal-custom-close">
                <span class="btn-custom-close ">X</span>
            </div>
            <header class="modal-custom-header">
                   <h2 class="modal-custom-title"> Vào phòng thi</h2>
            </header>
            <div class="modal-custom-body">
              <form  method="POST" action="{{ route('productController.handleExam') }}">
                @csrf
                <div class="form-group">
                  <label for="code-to-test" class="label-custom">Mã phòng thi:</label>
                  <div class="form-row">
                    <input type="text" name="code-to-test" id="code-to-test" class="code-to-test" placeholder="Nhập mã phòng thi..." required>
                  </div>
                </div>
                <div class="form-group ">
                    <input type="submit" name="submit" id="btn-to-test" class="btn-to-test" value="Vào thi" />
                </div>
              </form>
            </div>
        </div>
    </div>
    <!-- MODAL ENDS -->


    <!-- HEADER STARTS -->
    @include('user.shared.header')
    <!-- HEADER ENDS -->


    <!-- CONTENT STARTS -->
    @yield('content')
    <!-- COTENT ENDS -->

    {{--DARK MODE STARTS --}}
    {{-- <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="darkSwitch">
        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
    </div> --}}
    {{--DARK MODE ENDS --}}

    <!-- BACKTOP STARTS -->
    <p id="button"></p>
    <!-- BACKTOP ENDS -->


    <!-- FOOTER STARTS -->
    @include('user.shared.footer')
    <!-- FOOTER ENDS -->


    <!-- JS  -->
    {{-- JQUERY --}}
    <script src="public/user/assets/js/jquery.min.js">
    </script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    {{-- DARK MODE --}}
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
    {{-- DARK MODE BOOSTRAP --}}
    <script src="public/user/assets/js/dark-mode-switch.min.js">
    </script>
    {{-- DARK MODE --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="public/user/assets/js/filter.js">
    </script>
    <script src="public/user/assets/js/simple.money.format.js">
    </script>

    <script>
        $(document).ready(function () {
        $("#slider-range").slider({
            orientation: "vertical",
            range: true,
            min: {{$minPrice}},
            max: {{$maxPrice}},
            step: 50000,
            values:[{{$minPrice}},{{$maxPrice}}],
            slide: function (event, ui) {
                $("#amountStart").val( ui.values[1]+'vnd').simpleMoneyFormat();
                $("#amountEnd").val(ui.values[0]+'vnd').simpleMoneyFormat();

                $("#startPrice").val(ui.values[0]);
                $("#endPrice").val(ui.values[1]);
            },
        });
        $("#amountStart").val(
                $("#slider-range").slider("values", 1)+'vnd').simpleMoneyFormat();

        $("#amountEnd").val(
                $("#slider-range").slider("values", 0)+'vnd').simpleMoneyFormat();

         });
    </script>

    {{-- SEARCH AJAX --}}
    <script>
        $(".search-ajax-result").hide();
        $(".live-search-bar").keyup(function () {
        var _text = $(this).val();
        if(_text!='' && _text!=' ') {
            $.ajax({
            url:"{{route('home.ajaxSearch')}}?key="+ _text,
            type:'GET',
            success:function(res){
                $(".search-ajax-result").show(200);
                $(".search-ajax-result").html(res);
                }
            });
        }else{
            $(".search-ajax-result").html('');
            $(".search-ajax-result").hide();
            }
        });
    </script>

    <script src="public/user/assets/js/main.js">
    </script>
    <script src="public/user/assets/js/add-to-cart.js">
    </script>
     <!-- JS  -->
</body>

</html>
