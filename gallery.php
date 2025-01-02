<?php ;
$meta = [
    'title' => "Gallery of Success&Innovation by AS Wealth & Training PVT.LTD",
    'description' => "Explore AS Wealth & Training Pvt. Ltd's Gallery of Success & Innovation. See how we inspire excellence and creative solutions, shaping a bright future for students.",
    'keywords' => "AS Wealth & Training Pvt. Ltd,Job-Oriented Training Programs,Stock Market Trends & Stock Charts,Stock Market Analysis,Top Investment Tips and Insights,stock market gallery,Student practice sections.",


];
include('includes/header.php')

    ?>


<div class="container-fluid bg-primary py-5 bg-header21" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn"> Our Gallery </h1>

        </div>
    </div>
</div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-primary p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->
<!-- gallery Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase"> Collection </h5>
            <h1 class="mb-0"> Master Stock Trading with Hands On Practice</h1>
        </div>
        <div class="row g-5">
            <div class="gallery">
                <div class="gallery-item" onclick="openModal(0)">
                    <img src="images/gallery-4.png" alt="">
                </div>
                <div class="gallery-item" onclick="openModal(1)">
                    <img src="images/gallery-2.png" alt="">
                </div>
                <div class="gallery-item" onclick="openModal(2)">
                    <img src="images/gallery-3.png" alt="">
                </div>
                <!--<div class="gallery-item" onclick="openModal(3)">-->
                <!--    <img src="images/gallery-4.png" alt="">-->
                <!--</div>-->
                <div class="gallery-item" onclick="openModal(4)">
                    <img src="images/galler-1.png" alt="">
                </div>
                <!--<div class="gallery-item" onclick="openModal(6)">-->
                <!--    <img src="images/gallery-6.png" alt=" ">-->
                <!--</div>-->
                <div class="gallery-item" onclick="openModal(5)">
                    <img src="images/gallery-5.png" alt=" ">
                </div>


                <div class="gallery-item" onclick="openModal(7)">
                    <img src="images/gallery-7.png" alt="">
                </div>
                <!--<div class="gallery-item" onclick="openModal(8)">-->
                <!--    <img src="images/gallery-8.png"  alt=" ">-->
                <!--</div>-->
                <!--<div class="gallery-item" onclick="openModal(9)">-->
                <!--    <img src="images/galler-1.jpeg" alt=" ">-->
                <!--</div>-->



                <!--<div class="gallery-item" onclick="openModal(10)">-->
                <!--    <img src="images/gallery-9.png" alt=" ">-->
                <!--</div>-->
                <div class="gallery-item" onclick="openModal(11)">
                    <img src="images/gallery-10.png" alt="Image ">
                </div>
                <div class="gallery-item" onclick="openModal(12)">
                    <img src="images/gallery-11.png" alt=" ">
                </div>
                <div class="gallery-item" onclick="openModal(13)">
                    <img src="images/gallery-12.png" alt=" ">
                </div>
                <!--<div class="gallery-item" onclick="openModal(14)">-->
                <!--    <img src="images/galler-1.jpeg" alt="Image ">-->
                <!--</div>-->

            </div>

            <div id="modal" class="modal">
                <span class="close" onclick="closeModal()">&times;</span>
                <div class="modal-content">
                    <div class="modal-left">
                        <img id="modal-img" src="" alt="Modal Image">
                    </div>
                    <div class="modal-right">
                        <p id="modal-text"></p>
                        <button class="nav-btn" onclick="prevImage()">&#9664;</button>
                        <button class="nav-btn" onclick="nextImage()">&#9654;</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- gallery end-->




<!-- added gallery-->

<?php ;

include('includes/footer.php')

  ?>
</html>












