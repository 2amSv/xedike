<!doctype html>
<html lang="en">

<head>
    <title>Xe Đi Ké</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/png" href="./img/cropped-favicon.png" />
    <link rel="stylesheet" href="<?php echo $_DOMAIN; ?>/css/xedike.css">
    <!-- Custom fonts for this template -->
</head>

<body>
    <?php
 
    //Nếu chưa đăng nhập
    if(!$user)
    {
        echo 
        '
        <nav class="navbar navbar-expand-lg navbar-light bg-light myNav">
        <a class="navbar-brand" href="#"><img src="./img/cropped-favicon.png" alt="">
            <h3 class="d-inline">HitchHike</h3>
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./xedike.html">Trang Chủ
                        <div class="line"></div>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us
                        <div class="line"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Liên Hệ
                        <div class="line"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dangnhap.html">Đăng Nhập
                        <div class="line"></div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./dangki.html">Đăng Kí
                        <div class="line"></div>
                    </a>
                </li>
            </ul>

        </div>
    </nav>
        ';
    }
    //Nếu đăng nhập
    else{

    }
    ?>
    <!-- My Navbar-->
    
    <!-- header -->
    <section class="wrapper">
        <header class="container my-auto myHeader text-center">
            <div class="row" style="color:#E84B0C">
                <div class="col-lg-12">
                    <h2 class="mb-4">Hãy bắt đầu chuyến đi của bạn</h2>
                    <p style="font-size:18px">Mỗi chuyến đi là một sự trải nghiệm.</p>
                </div>
            </div>

            <form action="">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group input-group-lg mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color:red;"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nơi đi" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group input-group-lg mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="color:green;"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Nơi đến" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="input-group input-group-lg mb-3">
                            <input type="date" class="form-control" aria-describedby="basic-addon1">

                            <div class="input-group-append ">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-danger">Tìm kiếm</button>
                    </div>

                </div>
            </form>
        </header>
    </section>

    <!-- DESTINATIONS -->

    <div class="destinations" id="destinations">
        <div class="container">
            <div class="section_title">
                <h2>Chuyến đi có sẵn</h2>
            </div>
            <div class="row destinations_row">
                <div class="col">
                    <div class="destinations_container item_grid" style="position: relative; height: 2500px;">

                        <!-- Destination 1 -->
                        <div class="destination item" style="position: absolute; left: 0px; top: 0px;">
                            <div class="destination_image">
                                <img src="img/img-nhavh.jpg" alt="" style="float: left;">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title">
                                    <a href="destinations.html">KTX ĐHQG-NHÀ VĂN HÓA THANH NIÊN</a>
                                </div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">30.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>

                        <!-- Destination 2 -->
                        <div class="destination item" style="position: absolute; right: 30px; top: 0px;">
                            <div class="destination_image">
                                <img src="img/uit.jpg" alt="" width="576px" height="330px" style="float: left;">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">KTX KHU B-ĐH CNTT</a></div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">10.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>

                        <!-- Destination 3 -->
                        <div class="destination item" style="position: absolute; left: 0px; top: 600px;">
                            <div class="destination_image">
                                <img src="img/img_uel.jpg" alt="" width="576px" height="330px">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">KTX KHU B-ĐH KINH TẾ LUẬT</a></div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">15.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>

                        <!-- Destination 4 -->
                        <div class="destination item" style="position: absolute; right: 0px; top: 600px;">
                            <div class="destination_image">
                                <img src="img/img_bk2.png" alt="" width="576px" height="330px">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">KTX ĐHQG-ĐH BÁCH KHOA CS2</a></div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">35.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>

                        <!-- Destination  5 -->
                        <div class="destination item" style="position: absolute; left: 0px; top: 1200px;">
                            <div class="destination_image">
                                <img src="img/img-baotangct.jpg" alt="" width="576px" height="330px">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">KTX ĐHQG-ẢO TÀNG CHỨNG TÍCH
                                        CHIẾN TRANH</a></div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">30.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>

                        <!-- Destination 6 -->
                        <div class="destination item" id="center-img" style="position: absolute; top: 1800px;">
                            <div class="destination_image">
                                <img src="img/img_park.jpg" alt="" width="576px" height="330px">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">KTX ĐHQG-CÔNG VIÊN 23-9</a></div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">25.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>
                        <!-- Destination 7-->
                        <div class="destination item" style="position: absolute; right: 0px; top: 1200px;">
                            <div class="destination_image">
                                <img src="img/img-catheral.jpg" alt="" width="576px" height="330px">
                            </div>
                            <div class="destination_content">
                                <div class="destination_title"><a href="destinations.html">KTX ĐHQG-NHÀ THỜ ĐỨC BÀ</a></div>
                                <div class="destination_subtitle">
                                    <p>Xuất phát: 7h30 ngày 20/11/2018</p>
                                </div>
                                <div class="destination_price">35.000đ</div>
                                <button class="book">
                                    <a class="booknow" href="fInfo.html">ĐẶT NGAY</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Registration for biker -->
        <div class="container">
            <div class="row">
                <div class="col-7 d-flex">
                    <img src="img/img_driver_2.png" alt="Driver 2" class="">
                    <img src="img/img_driver_1.png" alt="Driver 1" class="">
                    <img src="img/img_driver_3.png" alt="Driver 3" class="">
                </div>
                <div class="col-5">
                    <div>
                        <h1>Bắt đầu chuyến xe của bạn</h1>
                        <p>Là người sẽ mang những chuyến xe cũng như những trải nghiệm cho Khách hàng. Các tài xế luôn
                            là
                            những người hiểu rõ Khách hàng cần những gì là tốt nhất. Tất nhiên, chúng tôi có những Quy
                            định
                            cụ thể để đảm bảo lợi ích lớn nhất cho tất cả các bên.</p>
                        <button type="button" class="ant-btn ant-btn-primary ant-btn-lg">
                            <span>Trở thành tài xế</span>
                        </button>
                    </div>
                </div>

            </div>


        </div>

        <!-- Tabar -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o1.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Thuê xe du hí</h4>
                    </a>
                    <p>
                        Bạn muốn mình tự trải nghiệm những chuyến đi.Vang,xedike sẽ đồng hành cùng bạn trên mọi nẻo
                        đường.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o2.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Địa điểm giải trí</h4>
                    </a>
                    <p>
                        Bạn đang cảm thấy áp lực và đang cần giải tỏa stress,nhưng lại FA không có bạn đồng hành.Vâng
                        ,đã có xedike lo.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o3.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>CLB vào cuối tuần</h4>
                    </a>
                    <p>
                        Bạn đang học tiếng anh,tiếng nhật nhưng không có môi trường thực hành.Vâng hãy để xedike mang
                        bạn đến một thế giới CLB
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-other-issue">
                    <div class="thumb">
                        <img class="img-fluid" src="img/o4.jpg" alt="">
                    </div>
                    <a href="#">
                        <h4>Địa điểm ăn uống </h4>
                    </a>
                    <p>
                        Bạn đang có voucher tại nhà hàng A nhưng lại không có ai đi cùng.Vâng hãy để xedike lo mọi việc
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- FOOTER -->

    <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
        <div class="flex-w p-b-90">
            <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                <h4 class="s-text12 p-b-30">
                    <strong>LIÊN HỆ</strong>
                </h4>
                <div>
                    <p class="s-text7 w-size27">
                        <ul>
                            <li>
                                <strong>Địa chỉ:</strong>
                                Linh Trung,Thủ Đức,TP HCM
                            </li>
                            <li>
                                <strong>Holine:</strong>
                                0123456789
                            </li>
                            <li>
                                <strong>Email:</strong>
                                UIT@gm.uit.edu.vn
                            </li>
                        </ul>
                    </p>

                    <div class="flex-m p-t-30">
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                        <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                    </div>
                </div>
            </div>


            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    <strong>THÔNG TIN</strong>
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Liên hệ
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Đội ngũ
                        </a>
                    </li>


                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    <strong>ĐI KÉ XE</strong>
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Điều khoản sử dụng
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Chính sách Bảo mật thông tin
                        </a>
                    </li>

                </ul>
            </div>

            <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                <h4 class="s-text12 p-b-30">
                    <strong>HỖ TRỢ</strong>
                </h4>

                <ul>
                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Đăng kí làm Tài xế
                        </a>
                    </li>

                    <li class="p-b-9">
                        <a href="#" class="s-text7">
                            Đăng ký hành khách
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>