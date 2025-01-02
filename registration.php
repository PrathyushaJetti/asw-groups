<?php ;
$meta = [
    'title' => " ",
    'description' => "",
    'keywords' => "",


];
include('includes/header.php')

    ?>

<div class="container-fluid bg-primary py-5 bg-headerabout" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Registration</h1>

        </div>
    </div>
</div>
</div>

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

<!--registraration form  start -->

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-12">
                <div class="section-title position-relative pb-3 mb-5">
                    <center>
                        <h5 class="fw-bold text-primary text-uppercase"> Registration</h5>
                    </center>
                    <h1 class="mb-0">Unlock your financial potential—register for our comprehensive stock market
                        training courses today.</h1>
                </div>

            </div>
            <center>
                <div class="col-lg-5 ">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px;" required>
                                </div>
                                <div class="col-xl-12">
                                    <input type="tel" class="form-control bg-light border-0"
                                        placeholder="Your Phone Number" style="height: 55px;" required>
                                </div>

                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" required>
                                        <option selected>Select A Course</option>
                                        <option value="1">Stock Market full training course</option>
                                        <option value="2">Equity Cash market</option>
                                        <option value="3">Future & Options training course</option>
                                        <option value="3">MCX Commodity market training</option>
                                        <option value="3">Currency market Training course</option>
                                       
                                    </select>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit"> Register </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </center>

        </div>
    </div>
</div>





<!--registraration form  end -->

<?php ;

include('includes/footer.php')

    ?>

</html>