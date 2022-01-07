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
  <link type="text/css" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Icons -->
  <link rel="stylesheet" href="./admin_assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./admin_assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./admin_assets/css/argon.css?v=1.2.0" type="text/css">
  <link rel="stylesheet" href="./user/assets/css/main.css">
  <link rel="stylesheet" href="./user/assets/css/custom.css">

  {{-- CKEDITOR --}}
  <!-- <script src="ckeditor/ckeditor.js"></script> -->
  <script type="text/javascript" language="javascript" src="./ckeditor/ckeditor.js" ></script>
  <link href="https://vjs.zencdn.net/7.17.0/video-js.css" rel="stylesheet" />
  {{-- CKEDITOR --}}
  <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
</head>

<body>
  <!-- Sidenav -->
  @include('admin.layout.header')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" name="search" id="search" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./admin_assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./admin_assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./admin_assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./admin_assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./admin_assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
<<<<<<< HEAD
                    <img alt="Image placeholder" src="{{(session('login')==null?'public/images/avatar.png':session('login')->ANHDAIDIEN=='')?'public/images/avatar.png':'public/images/'.session('login')->ANHDAIDIEN}}">
=======
                    {{-- <img alt="Image placeholder" src="{{session('login')==null?'{{asset('images/avatar.png':session('login')->ANHDAIDIEN==''?'{{asset('images/avatar.png':'{{asset('images/'session('login')->ANHDAIDIEN}}">
                  </span> --}}
                    {{-- <img alt="Image placeholder" src="{{session('login')==null?'./images/avatar.png':session('login')->ANHDAIDIEN==''?'./images/avatar.png':'./images/'.session('login')->ANHDAIDIEN}}"> --}}
>>>>>>> 07e2c95a88d4d5d96ca88065e10a356810be8867
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{session('login')==null?'':session('login')->HOTEN}}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="admin/thongtincanhan" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Thông tin cá nhân</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="admin/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Đăng xuất</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page content -->
    @yield('content')
  </div>

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./admin_assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./admin_assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./admin_assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./admin_assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./admin_assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="./admin_assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="./admin_assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="./admin_assets/js/argon.js?v=1.2.0"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  @include('admin.layout.ajax')

  <script type="text/javascript">
    $(document).ready(function() {
      $('input[type="radio"]').change(function() {

        if ($("#video").is(':checked')) {
          $("#baihoc").show();
          $("#lophoc").hide();
        }
        if ($("#tructuyen").is(':checked')) {
          $("#baihoc").hide();
          $("#lophoc").show();
        }
      });


      $('#formbaihoc').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body input').val(recipient)
      });

      $("#MATK").bind("change keyup", function(event) {
        var e = document.getElementById("MATK");
        document.getElementById("giangvien").innerHTML = e.options[e.selectedIndex].text;
      });


      $('#main_form').on('submit', function(event) {
        var input = document.getElementById('TENKH');

        if (input.value == '') {
          input.setCustomValidity('You gotta fill this out, yo!');
          event.preventDefault();
        }
      });
    });
  </script>
  <script>
    function textChange() {
      document.getElementById("tenkhoahoc").innerHTML = document.getElementById("TENKH").value;
      document.getElementById("dongia").innerHTML = document.getElementById("DONGIA").value;
      document.getElementById("giamgia").innerHTML = document.getElementById("DONGIA").value;
    }

    function imgchange(event) {
      $("#anh").attr('src', URL.createObjectURL(event.target.files[0]));
    }

    CKEDITOR.replace('CHITIETKH');
    CKEDITOR.replace('GIOITHIEUKH');
    CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;
    CKEDITOR.config.shiftEnterMode = CKEDITOR.ENTER_P;
    CKEDITOR.config.autoParagraph = false;
  </script>
  <script>
    function toggle(oInput) {
      var aInputs = document.getElementsByTagName('input');
      for (var i=0;i<aInputs.length;i++) {
          if (aInputs[i] != oInput) {
              aInputs[i].checked = oInput.checked;
          }
      }
    }
  </script>

  {{-- CKEDITOR --}}
  @yield("ckeditor")

</body>

</html>