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


  

        <!--write this code mobile menu show start-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $('.navbar-toggler').click(function () {
                $('#navbarCollapse').toggle();
            })
        </script>
        <!--write this code mobile menu show end-->