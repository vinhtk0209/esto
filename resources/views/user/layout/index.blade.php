<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP  -->
    <base href="{{asset('')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- BOOTSTRAP  -->
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="./assets/css/main.css"> -->
    <link rel="stylesheet" href="./user/assets/css/main.css">
    <link rel="stylesheet" href="./user/assets/css/myCourse.css">
    <!-- <link rel="stylesheet" href="./assets/css/app.css"> -->
    <link rel="stylesheet" href="./user/assets/css/app.css">
    <!-- <link rel="stylesheet" href="./assets/sweetalert/alert.min.css"> -->
    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- SWIPER -->


    <!-- CUSTOM CSS -->
    <!-- GLOBAL CSS -->
    <link rel="stylesheet" href="./user/assets/css/global.css" >
    <!-- CHECKOUT CSS -->
    <link rel="stylesheet" href="./user/assets/css/checkout.css" >
    <!-- INPUT CSS -->
    <link rel="stylesheet" href="./user/assets/css/input-effect.css" >
    <!-- PROGRESS CSS -->
    <link rel="stylesheet" href="./user/assets/css/progress.css" >
    <!-- EXAM CSS -->
    <link rel="stylesheet" href="./user/assets/css/exam.css" >
    <!-- INFO FILE CSS -->
    <link rel="stylesheet" href="./user/assets/css/infoFile.css" >
    <!-- LEARN CSS -->
    <link rel="stylesheet" href="./user/assets/css/learn.css" >
    <!-- DARKMODE CSS -->
    <link rel="stylesheet" href="./user/assets/css/darkmode.css" >
    <!-- SEARCH CSS -->
    <link rel="stylesheet" href="./user/assets/css/search.css" >
    <!-- RANGE JQUERY CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <!-- MODAL CSS -->
    <link rel="stylesheet" href="./user/assets/css/modal.css">
    <!-- PAGINATION CSS -->
    <link rel="stylesheet" href="./user/assets/css/pagination.css">
    <!-- LOADING CSS -->
    <link rel="stylesheet" href="./user/assets/css/loading.css">
    <!-- BACKTOP CSS -->
    <link rel="stylesheet" href="./user/assets/css/backTop.css">
    <!-- COURSE DETAIL CSS -->
    <link rel="stylesheet" href="./user/assets/css/courseDetail.css">
    <!-- INFO MANAGER CSS -->
    <link rel="stylesheet" href="./user/assets/css/infoManager.css">
    <!-- LIST COURSE CSS -->
    <link rel="stylesheet" href="./user/assets/css/modal.css" >
    <!-- PAGINATION CSS -->
    <link rel="stylesheet" href="./user/assets/css/pagination.css" >
    <!-- LOADING CSS -->
    <link rel="stylesheet" href="./user/assets/css/loading.css">
     <!-- BACKTOP CSS -->
    <link rel="stylesheet" href="./user/assets/css/backTop.css">
     <!-- COURSE DETAIL CSS -->
    <link rel="stylesheet" href="./user/assets/css/courseDetail.css">
     <!-- INFO MANAGER CSS -->
    <link rel="stylesheet" href="./user/assets/css/infoManager.css">
     <!-- LIST COURSE CSS -->
    <link rel="stylesheet" href="./user/assets/css/listCourse.css">
    <link rel="stylesheet" href="./user/assets/css/custom.css">
    <link rel="stylesheet" href="./user/assets/css/listCourse.css">
     <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./user/assets/css/custom.css">
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./user/assets/js/jquery.min.js"></script>

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
                <form method="POST" action="{{ route('productController.handleExam') }}">
                    @csrf
                    @if (count($errors))
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}</br>
                        @endforeach
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="code-to-test" class="label-custom">Mã phòng thi:</label>
                        <div class="form-row">
                            <input type="text" name="code" id="code" class="code-to-test" placeholder="Nhập mã phòng thi..." required>
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


    <!-- BACKTOP STARTS -->
    <div id="btnBackTop"></div>
    <!-- BACKTOP ENDS -->


    <!-- FOOTER STARTS -->
    @include('user.shared.footer')
    <!-- FOOTER ENDS -->







    <!-- JS STARTS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="./user/assets/js/filter.js"></script>
    <script src="./user/assets/js/simple.money.format.js"></script>
    <script src="./user/assets/js/progress.js"></script>
    <script src="./user/assets/js/main.js"></script>
    <script src="./user/assets/js/add-to-cart.js"></script>

    {{-- TAKE THE EXAM STARTS --}}
    @include('user.layout.ajax')
    <script>
        var yourDateToGo3 = new Date();
        var timecurrent = new Date();
        var tg = document.getElementById("TGKT").value.split(' ')[1];
        yourDateToGo3.setHours(yourDateToGo3.getHours() + parseInt(tg.split(':')[0]) - timecurrent.getHours());
        yourDateToGo3.setMinutes(yourDateToGo3.getMinutes() + parseInt(tg.split(':')[1]) - timecurrent.getMinutes());
        yourDateToGo3.setSeconds(yourDateToGo3.getSeconds() + parseInt(tg.split(':')[2]) - timecurrent.getSeconds());
        let currentDateProgress = new Date().getTime();
        let timeLeftProgress = yourDateToGo3 - currentDateProgress;
        let secondProgress = (timeLeftProgress/1000)-2;
        var timing3 = setInterval(
            function() {
                var currentDate3 = new Date().getTime();
                var timeLeft3 = yourDateToGo3 - currentDate3;
                var hours3 = Math.floor((timeLeft3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                if (hours3 < 10) hours3 = "0" + hours3;
                var minutes3 = Math.floor((timeLeft3 % (1000 * 60 * 60)) / (1000 * 60));
                if (minutes3 < 10) minutes3 = "0" + minutes3;
                var seconds3 = Math.floor((timeLeft3 % (1000 * 60)) / 1000);
                if (seconds3 < 10) seconds3 = "0" + seconds3;
                document.getElementById("countdown").innerHTML = hours3 + "giờ " + minutes3 + "phút " + seconds3 + "giây";
                if (timeLeft3 <= 0) {
                    clearInterval(timing3);
                    document.getElementById("countdown").innerHTML = "Đã hết thời gian làm bài";
                    // alert('Bài của bạn đã được nộp');
                    // document.location.href = 'https://esto.com/';
                }
            }, 1000);
        progress(secondProgress, secondProgress, $('#progressBar'));
        if (timeLeft3 <= 0) {
         clearInterval(timing3);
        }
    </script>
      {{-- TAKE THE EXAM ENDS --}}

     <script>
     // {{-- FILTER  STARTS--}}
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
     {{-- FILTER  ENDS--}}

    {{-- SEARCH AJAX STARTS --}}
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
    {{-- SEARCH AJAX ENDS --}}

    {{-- CHAT BOX STARTS --}}
    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104918645402384");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    {{-- CHAT BOX ENDS --}}

    {{-- LOAD VIDEO STARTS--}}
    <script>
        function playLesson(lesson_id) {
            $.ajax({
                url: '/ajax-load-video',
                type: 'GET',
                data: {
                    'lesson_id': lesson_id
                },
                success: function(response) {
                    if(response.status == 200) {
                        $("#video_lesson").html(response.data);
                    }
                }
            });
        }
    </script>
    {{-- LOAD VIDEO ENDS--}}

    {{-- SWEET ALERT --}}
    @if (Session::has('updateSuccess'))
    <script>
        swal("Thành công","{!!Session::get('updateSuccess')!!}","success",{
            button:"OK",
        });
    </script>
    @endif

    @if (Session::has('buyClassSuccess'))
    <script>
        swal("Thành công","{!!Session::get('buyClassSuccess')!!}","success",{
            button:"OK",
        });
    </script>
    @endif

    @if (Session::has('buyClassFailed'))
        <script>
            swal("Thất bại","{!!Session::get('buyClassFailed')!!}","error",{
            button:"OK",
        });
    </script>
    @endif

    @if (Session::has('noLogin'))
        <script>
          Swal.fire({
            type: 'error',
            title: '<strong>Vui lòng đăng nhập</strong>',
            html:
            'nhấn vào <strong><a href="{{route("login.login")}}">đây</a></strong> để đăng nhập',
            button:"OK",
        });
        </script>
    @endif

    {{-- TEST --}}
    @if (Session::has('noTest'))
    <script>
          swal("Thất bại","{!!Session::get('noTest')!!}","error",{
            button:"OK",
        });
    </script>
    @endif

    {{-- PAYPALL STARTS --}}
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>
    var usd =  document.getElementById("paypalPrice").value;
    paypal.Button.render({
        // Configure environment
        env: 'sandbox',
        client: {
        sandbox: 'AdJLSkkxq2nVHPZ3xtgwV00d53ROKQft5DCLNoxTc3jAlUBhK4nAzqDDEAMrvDx7tSEc_Jhrgfd-j9en',
        production: 'demo_production_client_id'
        },
        // Customize button (optional)
        locale: 'en_US',
        style: {
        size: 'small',
        color: 'gold',
        shape: 'pill',
        },
        // Enable Pay Now checkout flow (optional)
        commit: true,
        // Set up a payment
        payment: function(data, actions) {
        return actions.payment.create({
            transactions: [{
            amount: {
                total: `${usd}`,
                currency: 'USD'
            }
            }]
        });
        },
        // Execute the payment
        onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function() {
            // Show a confirmation message to the buyer
            window.alert('Cảm ơn bạn đã mua khóa học!!');
        });
        }
    }, '#paypal-button');
    </script>
    {{-- PAYPALL ENDS --}}

    {{-- COMMENT START --}}    
    <script>
        function generateStar(startNumber){
            let html = "";
            if (!startNumber){
                return html;
            }
            for (let i = 1; i <= startNumber; i++) {
               html += `<i class="fas fa-star star-color"></i>`;
            }
            return html;
        }

        function isEmptyContentComment(){           
            if(document.getElementById('commentContent').value.length > 0 ) {
                if(document.getElementById('start_1').checked
                    || document.getElementById('start_2').checked
                    || document.getElementById('start_3').checked
                    || document.getElementById('start_4').checked
                    || document.getElementById('start_5').checked
                    )
                    document.getElementById('sendComment').disabled = false;                               
            }           
            else {            
                document.getElementById('sendComment').disabled = true;
            }                          
        }    

        function submitComment () {
            let data = $("#sendCommentForm").serializeArray();
            let url = $("#sendCommentForm").attr('action');
            $.ajax({
                url: url,
                method:"POST",
                data: data,
                dataType: "json",
                success:function(response){
                    console.log(response)
                    if(response.status == 1){
                        let html = `<div class="row style-comment">
                                        <div class="col-md-2">        
                                            <img width="40%" src="${response.data.ANHDAIDIEN}" alt="ESTO" class="img img-responsive img-thumbnail">
                                        </div>
                                        <div class="col-md-10"> 
                                            <p style="color:blue;">${response.data.HOTEN}</p>
                                            <p style="color: #000;">${response.data.NGAYDG}</p>
                                            <div>
                                                <span class="star-rate">
                                                  ${generateStar(response.data.SOSAO)}
                                                </span>
                                            </div>       
                                            <p>${response.data.NOIDUNG}</p>                                                                    
                                        </div>
                                    </div>`;
                        $("#sendCommentForm")[0].reset();
                        $("#listComment").append(html);
                    }else{
                        alert('Err');
                    }
                },
                error: function (data) {
                    console.log(data);
                }
            })
        }
    </script>
    {{-- COMMENT END --}}

     <!-- JS ENDS  -->

</body>

</html>