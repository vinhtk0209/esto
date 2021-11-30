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
    <section class="category ">
        <div class="container">
            <div class="d-flex flex-wrap flex-space">
                <ul class="list-category">
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/112/img/menu_icon-1595586642.png"
                                alt="">
                            Ngoại ngữ
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Tiếng anh</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Tiếng pháp</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Tiếng trung</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Tiếng nhật</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/126/img/menu_icon-1595588118.png"
                                alt="">
                            It và lập trình
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Quản trị mạng</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">IT</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Lập trình web</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Lập trình ứng dụng</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/114/img/menu_icon-1595841675.png"
                                alt="">
                            Hành chính nhân sự
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Quản trị nhân sự</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Tuyển dụng</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Đào tạo và phát triển</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Lập trình ứng dụng</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/150/img/menu_icon-1595822423.png"
                                alt="">
                            Tài chính kế toán
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Thuế</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Kế toán</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Tài chính</a>
                            </li>

                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/168/img/menu_icon-1595842434.png"
                                alt="">
                            Đời sống
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Yoga</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Sức khỏe</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Ẩm thực</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Nhiếp ảnh</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Thời trang-làm đẹp</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Âm nhạc</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Nghệ thuật</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Phong thủy</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/111/img/menu_icon-1595833302.png"
                                alt="">
                            Ứng dụng phần mềm
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Excel</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Word</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Powerpoint</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Python</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Photoshop</a>
                            </li>

                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/152/img/menu_icon-1595822848.png"
                                alt="">
                            Thiết kế đồ hoạ
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Thiết kế</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Kỹ xảo</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Dựng phim</a>
                            </li>

                        </ul>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <img src="https://media-kyna.cdn.vccloud.vn/uploads/categories/218/img/menu_icon-1597659127.png"
                                alt="">
                            Kỹ năng công việc
                        </a>
                        <ul class="sub-menu-category">
                            <li class="sub-menu-item active">
                                <a href="">Thuyết trình</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Nâng cao hiệu suất</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Giải quyết vấn đề</a>
                            </li>
                            <li class="sub-menu-item">
                                <a href="">Tư duy công việc</a>
                            </li>

                        </ul>
                    </li>
                </ul>
                <div class="swiper slide-category">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{asset('public/user/assets/img/slide-3.png')}}">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('public/user/assets/img/slide-4.png')}}">
                        </div>
                        <div class="swiper-slide"><img src="{{asset('public/user/assets/img/slide-5.png')}}"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION CATEGORY ENDS -->

    <!-- SECTION BEST-SELLER STARTS -->
    <section class="best-seller mb-16">
        <div class="best-seller-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-course">TOP BÁN CHẠY</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="best-seller-body">
            <div class="container">

                <ul class="list-best-seller-courses list-course d-flex flex-wrap">
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/ky-thuat-viet-pr-quang-cao-ban-hang_m_1555570144.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/quan-tri-cuoc-doi-le-tham-duong_m_1555575906.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>700.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-lam-chu-giong-noi_m_1555570795.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>1.499.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>1.000.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/bi-quyet-luyen-giong-thanh-cong_m_1555575739.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>500.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/09/thumb_m_1568254672.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>650.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>400.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/tu-do-tai-chinh-cung-chung-khoan_m_1555558460.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>350.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/nghe-thuat-tan-gai-bac-thay_m_1555573992.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>1.500.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>1.000.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-best-seller list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/uploads/images/hongvt@unica.vn/lap-trinh-android-tu-co-ban-den-thanh-thao_m.png"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- SECTION TOP-SELLER ENDS -->

    <!-- SECTION SPECIAL OFFER COURSE STARTS-->
    <section class="special-offer mb-16">
        <div class="special-offer-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-course">siêu ưu đãi hôm nay</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="special-offer-body">
            <div class="container">
                <ul class="list-special-offer-courses list-course d-flex flex-wrap">
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/06/kinh-doanh-airbnb-homestay_m_1561368573.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2021/02/152027001_424781968599461_1331317629737326340_n_m_1613701198.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>700.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/9-buoc-luyen-nghe-tieng-anh_m_1556176786.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>1.499.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>1.000.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2020/09/Untitled-1_m_1599656740.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>500.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/08/B%C3%AD-quy%E1%BA%BFt%20b%C3%A1n%20l%E1%BA%BB%20ng%C3%A0n%20%C4%91%C6%A1n%20tr%C3%AAn%20Shopee,%20Zalo%20v%C3%A0%20Facebook_m_1567158164.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>650.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>400.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-nhac-dien-tu-cho-nguoi-moi-bat-dau_m_1555658948.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>350.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2021/11/basic-java-core-600_m_1636859923.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>1.500.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>1.000.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-nhap-mon-chung-khoan_m_1555570756.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
    <!-- SECTION SPECIAL OFFER COURSE ENDS-->

    <!-- SECTION FREE COURSE STARTS -->
    <section class="free-course mb-16">
        <div class="free-course-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-course">khóa học 0 đồng</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="free-course-body">
            <div class="container">
                <ul class="swiper list-free-courses list-course ">
                    <div class="swiper-wrapper">
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2019/06/kinh-doanh-airbnb-homestay_m_1561368573.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2021/02/152027001_424781968599461_1331317629737326340_n_m_1613701198.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2019/04/9-buoc-luyen-nghe-tieng-anh_m_1556176786.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>1.490.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2020/09/Untitled-1_m_1599656740.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2019/08/B%C3%AD-quy%E1%BA%BFt%20b%C3%A1n%20l%E1%BA%BB%20ng%C3%A0n%20%C4%91%C6%A1n%20tr%C3%AAn%20Shopee,%20Zalo%20v%C3%A0%20Facebook_m_1567158164.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>650.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-nhac-dien-tu-cho-nguoi-moi-bat-dau_m_1555658948.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2021/11/basic-java-core-600_m_1636859923.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>1.500.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="swiper-slide list-free-course list-item">
                            <a href="" class="course-box">
                                <div class="img-course">
                                    <img class="img-responsive "
                                        src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-nhap-mon-chung-khoan_m_1555570756.jpg"
                                        alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                                </div>
                                <div class="course-des">
                                    <div class="name-course">
                                        <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                    </div>
                                    <div class="name-teacher d-flex flex-space">
                                        <p class="">Vinh Nguyen</p>
                                        <div class="price price-discount">
                                            <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                        </div>
                                    </div>
                                    <div class="price-course d-flex flex-space">
                                        <div class="rate">
                                            <p>
                                                <span class="star-rate">
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                    <i class="fas fa-star star-color"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <p>0 <span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </div>
                    <div class="swiper-pagination"></div>
                </ul>
                <div class="swiper-button-next btn-next-free-course"></div>
                <div class="swiper-button-prev btn-prev-free-course"></div>

            </div>
    </section>
    <!-- SECTION FREE COURSE ENDS -->

    <!-- SECTION ENGLISH COURSE STARTS -->
    <section class="english-course mb-16">
        <div class="special-offer-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="title-course">khóa học tiếng anh</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="special-offer-body">
            <div class="container">
                <ul class="list-special-offer-courses list-course d-flex flex-wrap">
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/anh-van-giao-tiep-cho-nguoi-hoan-toan-mat-goc_m_1555555777.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/khoa-hoc-luyen-thi-ielts-online_m_1555574391.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>700.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/05/noi-tieng-anh-sieu-toc-trong-90-ngay_m_1557995706.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>1.499.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>1.000.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/luyen-thi-toeic-01_m_1556178064.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>500.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/uploads/images/Thaoptt/tieng_anh_giao_tiep_cong_so_co_ban_m.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>650.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>400.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/05/noi-tieng-anh-sieu-toc-trong-90-ngay_m_1557995706.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>800.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>350.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/04/toeic-than-toc-cho-nguoi-mat-goc_m_1555642013.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>1.500.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>1.000.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="list-special-offer list-item">
                        <a href="" class="course-box">
                            <div class="img-course">
                                <img class="img-responsive "
                                    src="https://static.unica.vn/upload/images/2019/06/ren-luyen-ky-nang-doc-hieu_m_1561449078.jpg"
                                    alt="Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng">
                            </div>
                            <div class="course-des">
                                <div class="name-course">
                                    <h4>Kỹ thuật viết PR - Quảng cáo - Bán hàng đúng tâm lý khách hàng </h4>
                                </div>
                                <div class="name-teacher d-flex flex-space">
                                    <p class="">Vinh Nguyen</p>
                                    <div class="price price-discount">
                                        <p><del>600.000</del><span class="price-unit"><sup>vnd</sup></span></p>
                                    </div>
                                </div>
                                <div class="price-course d-flex flex-space">
                                    <div class="rate">
                                        <p>
                                            <span class="star-rate">
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                                <i class="fas fa-star star-color"></i>
                                            </span>
                                        </p>
                                    </div>
                                    <p>600.000 <span class="price-unit"><sup>vnd</sup></span></p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
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