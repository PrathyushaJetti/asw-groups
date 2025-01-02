<?php
define('ROOT_PATH', 'http://localhost/asw-groups/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php $title = isset($meta['title']) ? $meta['title'] : 'As Wealth And Training Private Limited';
    echo $title; ?></title>
    <meta name="description" content="<?php
    $title = isset($meta['description']) ? $meta['description'] : 'As Wealth And Training Private Limited';
    echo $meta['description']; ?>">
    <meta name="keywords" content="<?php
    $title = isset($meta['keywords']) ? $meta['keywords'] : 'As Wealth And Training Private Limited';
    echo $meta['keywords']; ?>">
    <!-- Favicon -->
    <link href="<?= ROOT_PATH ?>images/logo.png" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&amp;family=Rubik:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= ROOT_PATH ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= ROOT_PATH ?>lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= ROOT_PATH ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT_PATH ?>css/scrolling.css" rel="stylesheet">
    <link href="<?= ROOT_PATH ?>css/gallery.css" rel="stylesheet">
    <link href="<?= ROOT_PATH ?>css/sucess.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= ROOT_PATH ?>css/style.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9ZXH0ZVFK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-V9ZXH0ZVFK');
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">

        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">

                    <small class="me-3 text-light">
                        <a href="tel:+918977910062" class="text-light text-decoration-none">
                            <i class="fa fa-phone me-2"></i> +91 89779 10062
                        </a> /
                        <a href="tel:+918977910061" class="text-light text-decoration-none">
                            +91 89779 10061
                        </a>
                    </small>
                    <small class="text-light">
                        <a href="mailto:info@aswgroupindia.com" class="text-light text-decoration-none">
                            <i class="fa fa-envelope-open me-2"></i>info@aswgroupindia.com
                        </a>
                    </small>

                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.facebook.com/aswgroupindia" target="_blank"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.linkedin.com/company/aswgroupindia/" target="_blank"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                        href="https://www.instagram.com/aswgroupindia/?utm_source=ig_web_button_share_sheet&amp;igsh=ZDNlZDc0MzIxNw%3D%3D"
                        target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="<?= ROOT_PATH ?>index.php" class="navbar-brand p-0">
                <!-- <h1 class="m-0"><i class="fa fa-user-tie me-2"></i> -->
                <img src="<?= ROOT_PATH ?>images/logo.png" style="height: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" style="display:none">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= ROOT_PATH ?>index.php" target="_blank" class="nav-item nav-link ">Home</a>
                    <a href="<?= ROOT_PATH ?>about.php" target="_blank" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="<?= ROOT_PATH ?>courses.php" class="nav-link dropdown-toggle"
                            data-bs-toggle="dropdown">Course</a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= ROOT_PATH ?>courses.php" class="dropdown-item"> All Courses </a>
                            <a href="<?= ROOT_PATH ?>Courses/stock-market-full-course-training.php" target="_blank"
                                class="dropdown-item"> Stock Market Full Training Course </a>
                            <a href="<?= ROOT_PATH ?>Courses/equity-cash-marekt-training.php" target="_blank"
                                class="dropdown-item">Equity Cash Market</a>
                            <a href="<?= ROOT_PATH ?>Courses/future&options-trading-training.php" target="_blank"
                                class="dropdown-item">Future & Options Training Course</a>
                            <a href="<?= ROOT_PATH ?>Courses/mcx-commodity-trading-training.php" target="_blank"
                                class="dropdown-item">MCX Commodity Market Training</a>
                            <a href="<?= ROOT_PATH ?>Courses/currency-market-trading-training.php" target="_blank"
                                class="dropdown-item">Currency Market Training Course</a>
                           
                        </div>
                    </div>

                    <a href="<?= ROOT_PATH ?>sucess.php" class="nav-item nav-link" target="_blank">Success Stories</a>
                    <a href="<?= ROOT_PATH ?>gallery.php" class="nav-item nav-link" target="_blank"> Gallery </a>
                    <a href="https://aswgroupindia.com/blog" class="nav-item nav-link" target="_blank">Blog</a>
                    <a href="<?= ROOT_PATH ?>contact.php" class="nav-item nav-link" target="_blank">Contact</a>
                    <a href="<?= ROOT_PATH ?>payment.php" class="nav-item nav-link" target="_blank">Payment Link</a>

                </div>

                <a href="<?= ROOT_PATH ?>registration.php" class="btn btn-primary py-2 px-4 ms-3">Register</a>




            </div>
        </nav>

        <!--write this code mobile menu show start-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $('.navbar-toggler').click(function () {
                $('#navbarCollapse').toggle();
            })
        </script>
        <!--write this code mobile menu show end-->