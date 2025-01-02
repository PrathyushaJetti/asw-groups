<?php ;
$meta = [
  'title' => " ",
  'description' => "",
  'keywords' => "",


];
include('includes/header.php')

  ?>

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="images/BANNER.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h3 class="display-1 text-white mb-md-4 animated zoomIn">TIME TO ENHANCE YOUR TRADING
                                SKILLS. </h3>
                            <a href="#quiet" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Submit
                            </a>
                            <a href="contact.html"
                                class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital
                                Solution</h1>
                            <a href="quote.html"
                                class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Submit</a>
                            <a href="#" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


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


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Student Satisfaction Rate </h5>
                            <h1 class="text-white mb-0"><span class="counter-upx" data-toggle="counter-up">300</span>
                            </h1>

                        </div>


                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Emerging Traders </h5>
                            <h1 class="mb-0" data-toggle="counter-up"> 82 </h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0"> Student Recognition </h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">150 </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!--news added start-->
    <div class="container-fluid py-3 wow fadeInUp bg-white" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">TODAYS UPDATE</h5>
                <h1 class="mb-0">Today’s news briefing highlights sharp market shifts and pivotal trading updates. </h1>
            </div>

        </div>
        <div class="scroll-container">

            <div class="container-scroll-section">
                <div class="card-scroll-section bg-dark " onclick="navigateToPage('./news/page1.html')">

                    <h5 class="description" style="color: white;">India and US Commit to Enhancing Cooperation Across
                        Energy Value Chain.</h5>
                </div>
                <div class="card-scroll-section " style="background-color:  #8b6508;"
                    onclick="navigateToPage('./news/page1.html')">

                    <h5 class="description" style="color: white;">Emcure Pharma Soars 5% Following Kotak's Positive
                        'Add' Rating.</h5>
                </div>
                <div class="card-scroll-section bg-dark" onclick="navigateToPage('./news/page1.html')">
                    <h5 class="description" style="color: white;">Market Stalemate: Sensex and Nifty Hover Flat as Tech
                        Sector Struggles for Stability.</h5>
                </div>
                <!-- <div class="card-scroll-section " style="background-color:  #8b6508;" onclick="navigateToPage('./news/page1.html')">-->

                <!--    <h5 class="description" style="color: white;">Gold Hits Record High on US Rate-Cut Optimism.</h5>-->
                <!--</div>-->









            </div>


        </div>
        <div>
            <center> <a href="news.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know
                    More </a></center>
        </div>



        <script src="js/script.js"></script>
    </div>
    <!--news added end-->



    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Experts trading strategies and personalized planning to optimize wealth
                            accumulation.</h1>
                    </div>
                    <p class="mb-4">At AS Wealth & Training, we specialize in stock market analysis and trading
                        strategies. We empower students with expert knowledge and practical skills for navigating the
                        stock exchange. Join us to enhance your trading acumen and achieve your investment goals.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Performance Enhancement</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                           <h4 class="text-primary mb-0"> +91 89779 10062/+91 89779 10061</h4>
                        </div>
                    </div> -->
                    <a href="about.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">More
                        About Us </a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                            src="images/about-us.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">Choose us for our exceptional skill in stock market and personalized training that
                    drives real results and empowers your growth.</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <!-- <h4>Best In Industry</h4> -->
                            <p class="mb-0">55 Hours of High-Value Content </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <!-- <h4>Award Winning</h4> -->
                            <p class="mb-0">200+ Students Successfully Transformed into Investors and Traders</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                            src="images/why-choose.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>

                            <p class="mb-0">Comprehensive Coverage from Basics to Advanced Level</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                                style="width: 60px; height: 60px;">
                                <i class="	fas fa-bullhorn text-white"></i>
                            </div>

                            <p class="mb-0">Languages of Instruction: Telugu, English, and Hindi.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
               
                <h1 class="mb-0">AS Wealth & Training Pvt. Ltd Admission & Certificate Process.
                </h1>
            </div>
            <div class="row ">
                <h4> Admission Process</h4>
                <p> <b>1. Payment:</b> You pay the fee. Your transaction is completely secured.</p>
                <p> <b>2. Inclusive Fee:</b> The fee includes everything (registration fee, instructor support,
                    certificate fee, etc.).</p>
                <p> <b>3. No Hidden Charges: Payment:</b> There are no hidden charges.</p>
                <p> <b>4. Payment Receipt: </b> You will receive a payment receipt via email immediately after payment.
                    Confirmation of your seat will be emailed after verifying your eligibility.</p>
                <p> <b>5. Relation Manager Contact:</b> A relation manager will contact you within a few hours after
                    payment and will provide you with the WhatsApp and calling number of your mentor.</p>
                <p> <b>6. WhatsApp to Mentor: </b> You will WhatsApp your name and the course you enrolled in to the
                    mentor for processing your admission. </p>
                <p> <b>7. Admission Approval:</b> After your admission is approved, you can stay in regular touch with
                    your mentor on WhatsApp and call during working hours (with an appointment).</p>
                <p> <b>8. Dedicated Relation Manager: </b> You will be assigned a dedicated relation manager to help you
                    with your learning . You can call or WhatsApp during working hours.</p>
                <p> <b>9. Live Classes/Webinars:</b> You will attend live Zoom classes or webinars if applicable for
                    your course. The course page mentions if there are classes for your program and its schedule.
                    Attendance is mandatory. For some subjects, AS Wealth & Training Pvt. Ltd is the only organization
                    that provides live Zoom webinars by experts in different fields to its students.</p>
                <p> <b>10. Study Plan Discussion:</b> The instructor will discuss a study plan with you.</p>
                <p> <b>11. Self-Study Commitment:</b>You will do self-study of 2 to 4 hours per week in addition to
                    classes.</p>
                <p> <b>12. Feedback to Mentor: </b> You will provide updates and feedback about classes to your mentor
                    regularly on WhatsApp during working hours.</p>
                <p> <b>13. Instructor and Mentor Roles:</b> : Your instructor is for the study plan, and your mentor is
                    for career guidance.</p>
                <p> <b>14. Certificate Dispatch:</b> A hard copy certificate from AS Wealth & Training Pvt. Ltd will be
                    couriered to you within two months. No hidden charge.</p>
                <p> <b>15. Lifetime Validity:</b> The certificate will mention that it is valid for a lifetime. No
                    renewal fee.</p>

                


                

                <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-lg-6">
                               
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100 rounded wow zoomIn " data-wow-delay="0.9s"
                                        src="images/resize.png" >
                                </div>
                               
                            </div>
                            <div class="col-lg-6" style="min-height: 500px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                        src="images/Untitled (1024 x 683 mm).png" >
                                </div>
                            </div>
                            <div class="col-lg-6" style="min-height: 500px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                        src="images/certificate.png" >
                                </div>
                            </div>
                            <div class="col-lg-6" style="min-height: 500px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                                        src="images/certificate-2.png" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
            

        </div>
    </div>
    <!-- Service End -->
    <!--table start-->
    <!--TABLE STARTED-->
    <div class="container  wow fadeInUp" data-wow-delay="0.6s">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto " style="max-width: 600px;">

            <h1 class="mb-0 ">Our Batch Timings:</h1>

        </div>
        <div class="container table-responsive py-5">
            <table class="table table-bordered table-hover text-center">
                <thead class="thead-dark">
                    <tr class=" text-light" style="background-color:#142035">
                        <th scope="col">S.NO</th>
                        <th scope="col">TIMINGS </th>
                        <th scope="col">BATCHES STARTS </th>
                        <th scope="col">MODE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>10AM- 12PM</td>
                        <td>5th SEP </td>
                        <td>OFFLINE</td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>12PM- 2PM</td>
                        <td>23<sup>rd</sup> SEP </td>
                        <td>OFFLINE</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>2PM- 4PM</td>
                        <td>23<sup>rd</sup> SEP </td>
                        <td>OFFLINE</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>4PM- 6PM</td>
                        <td>23<sup>rd</sup> SEP </td>
                        <td>OFFLINE</td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td>7:30PM- 9:30PM</td>
                        <td>16<sup>th</sup> SEP </td>
                        <td>ONLINE</td>
                    </tr>
                </tbody>
            </table>
        </div>
        

    </div>







    <!--table Ended-->






    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>
                <h1 class="mb-0">We are Offering Affordable Prices for Our Students. </h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Basic Plan</h4>
                            <small class="text-uppercase">For Beginners </small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;"></small>15,000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>2hours per day for 1 month</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Stock Market full training course(2
                                    hours) </span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Basic Technical Analysis Course(2
                                    hours) </span><i class="fa fa-check text-primary pt-1"></i></div>

                            <a href="contact.html" class="btn btn-primary py-2 px-4 mt-4">Buy Now </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Standard Plan</h4>
                            <small class="text-uppercase">For Intermediate Traders </small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;"></small>20,000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span>Monthly strategy reviews (2
                                    hours).</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Advance Technical Analysis Course (2
                                    hours).</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>MCX Commodity Market Training (2
                                    hours).</span><i class="fa fa-check text-primary pt-1"></i></div>

                            <a href="contact.html" class="btn btn-primary py-2 px-4 mt-4">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">Advanced Plan</h4>
                            <small class="text-uppercase">For Advanced Traders </small>
                        </div>
                        <div class="p-5 pt-0">
                            <h1 class="display-5 mb-3">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;"></small>25,000<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>
                            </h1>
                            <div class="d-flex justify-content-between mb-3"><span> Monthly expert sessions (2
                                    hours).</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Stock Market Full Training Course (2
                                    hours).</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-3"><span>Advance Technical Analysis Course (2
                                    hours).</span><i class="fa fa-check text-primary pt-1"></i></div>
                            <div class="d-flex justify-content-between mb-2"><span>Custom Workshops (1 hour )</span><i
                                    class="fa fa-check text-primary pt-1"></i></div>
                            <a href="contact.html" class="btn btn-primary py-2 px-4 mt-4"> Buy Now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" id="quiet">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"> Register </h5>
                        <h1 class="mb-0">Unlock your trading potential—Register for our comprehensive stock market
                            training courses today.</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support
                            </h5>
                        </div>
                    </div>
                    <p class="mb-4">By enrolling in our stock market training courses, you'll gain the knowledge and
                        skills needed to navigate the complexities of the trading markets. Our expert instructors will
                        guide you through every step, from the basics of investing to advanced trading strategies. Don’t
                        miss this opportunity to empower yourself with the tools to make informed financial decisions
                        and achieve your financial goals.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Reach out to us for your Query</h5>
                            <h4 class="text-primary mb-0"> +91 89779 10062/+91 89779 10061</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn"
                        data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Course </option>
                                        <option value="1">Stock Market full training course.</option>
                                        <option value="2">Equity Cash market.</option>
                                        <option value="3">Future & Options training course.</option>
                                        <option value="3">MCX Commodity market training.</option>
                                        <option value="3">Currency market Training course.</option>
                                        <option value="3">Intraday Trading strategy course.</option>
                                        <option value="3">Options Trading course.</option>
                                        <option value="3">Advance Technical Analysis course.</option>
                                        <option value="3">Basic Technical analysis course.</option>
                                        <option value="3">Wealth Creation course.</option>

                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit"> Register </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What our students say about our curriculum courses?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/0.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"> Amit Sharma </h4>
                            <!-- <small class="text-uppercase">Profession</small> -->
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Working with AS Wealth and Training Pvt. Ltd. has been a rewarding experience. Their expert
                        advice and hands-on training have significantly enhanced my financial management skills.


                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded"
                            src="images/1000_F_570574724_HWfki1q3XZt9WzVlCcQujOV5Jxe8UBG1 (1).jpg"
                            style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Priya Gupta</h4>
                            <!-- <small class="text-uppercase">Profession</small> -->
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        The personalized training sessions from AS Wealth and Training Pvt. Ltd. were a game-changer for
                        my financial planning. Their professionalism and in-depth knowledge gave me the confidence to
                        make informed investment decisions.
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/Piyush_Bhargava.jpg"
                            style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1"> Ravi Patel </h4>
                            <!-- <small class="text-uppercase">Profession</small> -->
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        AS Wealth and Training Pvt. Ltd. delivered unparalleled training that exceeded my expectations.
                        The clarity and depth of their financial expertise empowered me to achieve my financial goals
                        effectively.


                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="images/Pooja-1-e1622323927868-350x350.jpg"
                            style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Sanya Mehta </h4>
                            <!-- <small class="text-uppercase">Profession</small> -->
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Working with AS Wealth and Training Pvt. Ltd. has been a rewarding experience. Their expert
                        advice and hands-on training have significantly enhanced my financial management skills.


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i
                                        class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Full Name</h4>
                            <p class="text-uppercase m-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/WHAT IS TRADING-blog.png" alt="">

                        </div>
                        <div class="p-4">

                            <h4 class="mb-3">Understanding What Trading Is?</h4>
                            <p> Trading is a fundamental aspect of the financial markets, and for many, it represents an
                                exciting opportunity to engage in buying and selling assets for profit. </p>
                            <a class="text-uppercase" href="./blog/understanding-trading.html">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/Trade Compliance-blog.png" alt="">

                        </div>
                        <div class="p-4">

                            <h4 class="mb-3">Trade Compliance, Risk Management, and Innovation: Navigating the Modern
                                Trade Landscape:</h4>
                            <p>In today's interconnected global economy, navigating the complexities of trade involves
                                more than just executing transactions. </p>
                            <a class="text-uppercase" href="./blog/Navigating-the-Modern-Trade-Landscape.html">Read More
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="images/commodity-blog.png" alt="">

                        </div>
                        <div class="p-4">

                            <h4 class="mb-3">Understanding the Intersection of Commodities and the Stock Market;</h4>
                            <p>The dynamic world of commodities and the stock market is intertwined in ways that
                                significantly impact investors and the global economy. </p>
                            <a class="text-uppercase" href="./blog/understanding-trading.html">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->
    <style>
        section.hero {

            margin-top: -70px;
            background-color: #dfd6c817;
        }

        @media screen and (max-width: 576px) {
            section.hero {
                text-align: center;
            }

            section.hero img {
                width: 80%;
                margin: 0.5rem 0;
            }
        }
    </style>

    <section class="hero wow fadeInUp" data-wow-delay="0.1s" id="hero">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

            <h1 class="mb-0">ABOUT THE MENTOR:</h1>
        </div>
        <div class="container-lg">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h1 class="display-2 ">Mr. Shivaji Rao </h1>
                    <p>Mr. Rao has trained over <b style="color: chocolate;">750+ students</b>, successfully guiding
                        them to become full-time traders and investors.
                        Our institute is dedicated to educating individuals about financial markets and helping them
                        achieve their financial goals.

                    </p>
                    <p><b> Our Mission: </b>To empower one lakh traders to attain financial success through strategic
                        stock market </p>
                    <p> <b>investments and trading.</b><br>
                        We are committed to fostering lifelong relationships with our students. Once you join our
                        institute, we provide ongoing support to ensure your success in the trading world
                    </p>

                </div>
                <div class="col-sm-6 text-center">
                    <img src="./images/profissor.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php ;

include('includes/footer.php')

  ?>
</html>



   