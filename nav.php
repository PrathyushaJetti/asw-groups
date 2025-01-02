<?php ;
$meta = [
  'title' => " ",
  'description' => "",
  'keywords' => "",


];
include('includes/header.php')

  ?>
    <style>
        .navbar-banner {
    background-size: cover;
    background-position: center;
    height: 300px; /* Adjust height as needed */
    display: flex;
    align-items: center; /* Center content vertically */
    justify-content: center; /* Center content horizontally */
}

.navbar {
    background: rgba(0, 0, 0, 0.5); /* Optional translucent navbar background */
}

@media (max-width: 768px) {
    .navbar-banner {
        height: 200px; /* Adjust height for smaller screens */
    }
}

    </style>
</head>
<body>
    <!-- Responsive Background Banner -->
<div class="navbar-banner" style="background-image: url('images/about-banner.png');">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <img src="<?= ROOT_PATH ?>images/logo.png" style="height: 100px;" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link" style="color:#132034">Home</a>
                <a href="about.php" class="nav-item nav-link" style="color:#132034">About</a>
                <div class="nav-item dropdown">
                    <a href="<?= ROOT_PATH ?>courses.php" style="color:#132034" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course</a>
                    <div class="dropdown-menu m-0">
                        <a href="<?= ROOT_PATH ?>Courses/stock-market-full-course-training.html" class="dropdown-item">Stock Market full
                            training course</a>
                        <a href="<?= ROOT_PATH ?>Courses/equity-cash-marekt-training.html" class="dropdown-item">Equity Cash market
                        </a>
                        <a href="<?= ROOT_PATH ?>Courses/future&options-trading-training.html" class="dropdown-item">Future & Options
                            training course</a>
                        <a href="<?= ROOT_PATH ?>Courses/mcx-commodity-trading-training.html" class="dropdown-item">MCX Commodity market
                            training</a>
                        <a href="<?= ROOT_PATH ?>Courses/currency-market-trading-training.htm" class="dropdown-item">Currency market
                            Training course</a>
                        <a href="<?= ROOT_PATH ?>Courses/intraday-trading-training.html" class="dropdown-item">Intraday Trading
                            strategy course</a>
                        <a href="<?= ROOT_PATH ?>Courses/Option-Trading.html" class="dropdown-item">Options Trading course</a>
                        <a href="<?= ROOT_PATH ?>Courses/Advanced-Technical-Analysis.html" class="dropdown-item">Advance Technical
                            Analysis course</a>
                        <a href="<?= ROOT_PATH ?>Courses/Basic-Technical-Analysis.html" class="dropdown-item">Basic Technical
                            analysis course</a>
                        <a href="<?= ROOT_PATH ?>Courses/wealth-creation-course.html" class="dropdown-item">Wealth Creation course</a>
                    </div>
                </div>
                <a href="<?= ROOT_PATH ?>sucess.php" class="nav-item nav-link" style="color:#132034">Success Stories</a>
                <a href="<?= ROOT_PATH ?>gallery.php" class="nav-item nav-link" style="color:#132034">Gallery</a>
                <a href="https://aswgroupindia.com/blog" class="nav-item nav-link" style="color:#132034">Blog</a>
                <a href="<?= ROOT_PATH ?>contact.php" style="color:#132034" class="nav-item nav-link">Contact</a>
                <a href="<?= ROOT_PATH ?>payment.php" style="color:#132034" class="nav-item nav-link" target="_blank">Payment Link</a>
            </div>
            <a href="<?= ROOT_PATH ?>contact.php" class="btn btn-primary py-2 px-4 ms-3">Register</a>
        </div>
    </nav>
</div>

    
</body>
<?php ;

include('includes/footer.php')

  ?>

</html>