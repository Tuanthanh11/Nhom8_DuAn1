<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Peak sport Vietnam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="view/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="view/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="view/css/style.css" rel="stylesheet">
    <style>
        .form_dk {
            padding-left: 400px;
            padding-right: 400px;
        }

        .thongbao {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">VN</span>Peak sport</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="index.php?act=sanpham" method="post">
                    <div class="input-group">
                        <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm sản phẩm">
                        <div class="input-group-append">

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-giohang text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Thể loại</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                    id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">

                        <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=" . $id;

                            echo '
                                    <a href="' . $linkdm . '" class="nav-item nav-link">' . $tendm . '</a>
                                ';
                        }
                        ?>



                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                            <a href="index.php?act=sanpham" class="nav-item nav-link">Sản phẩm</a>
                            <a href="index.php?act=giohang" class="nav-item nav-link">Giỏ hàng</a>
                            <a href="index.php?act=bill" class="nav-item nav-link">Thông tin</a>
                            <a href="index.php?act=lichsu" class="nav-item nav-link">Đơn hàng</a>


                        </div>

                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);

                            ?>

                            <div class="navbar-nav ml-auto py-0">
                                <?php if ($role == 1) { ?>

                                    <a href="admin/index.php" class="nav-item nav-link">Admin</a>

                                <?php } ?>




                                <a href="index.php?act=edit_taikhoan" class="nav-item nav-link"> Xin chào: <?= $user ?></a>
                                <a href="index.php?act=thoat" class="nav-item nav-link">Đăng xuất</a>
                            </div>

                            <?php
                        } else {
                            ?>
                            <div class="navbar-nav ml-auto py-0">
                                <a href="index.php?act=dangnhap" class="nav-item nav-link">Đăng nhập</a>
                                <a href="index.php?act=dangky" class="nav-item nav-link">Đăng ký</a>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid"
                                src="view/img/air-jordan-34-cny_desktop-banner_e910e41fc5404a57a6b21b3be123f72a.png"
                                alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">GIẢM 10% CHO ĐƠN HÀNG
                                        ĐẦU TIÊN CỦA BẠN</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Nike Air Jordan 34</h3>
                                    <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="view/img/Thiet-ke-chua-co-ten-63.png" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">GIẢM 10% CHO ĐƠN HÀNG
                                        ĐẦU TIÊN CỦA BẠN</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Nike Anti-Clog Traction
                                    </h3>
                                    <a href="" class="btn btn-light py-2 px-3">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->