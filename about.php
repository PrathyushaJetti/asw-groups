<?php ;
$meta = [
  'title' => "AS Wealth & Training Pvt. Ltd -Top Stock Market Training in Hyd",
  'description' => "Become a successful trader with our top stock market institute. Learn to read charts effectively and use our easy materials for confident trading and complete success.",
  'keywords' => "Stock market training in Hyderabad,Best stock trading courses,Investment training experts,Financial education programs,Professional trading academy,Expert stock market guidance,Stock market strategies,Learn trading skills,Investment education,Top stock market training providers",


];
include('includes/header.php')

  ?>

        <div class="container-fluid bg-primary py-5 bg-headerabout" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    
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


 <!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">Master the stock market with expert training, insights, and strategies.</h1>
                </div>
                <p class="mb-4">At AS Wealth and Training Pvt. Ltd., we offer expert stock market training for all
                    levels. Our hands on courses, experienced trainers, and flexible learning options help you master
                    trading strategies and gain in depth market knowledge. Start your journey with us today.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Affordable Costs</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Skilled Tranies</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Advanced Performance</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 support </h5>
                    </div>
                </div>
<!-- 
                <a href="about.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">More
                    About Us </a> -->
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

    <!--new added -->


    <!--ADDED END-->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap");

        /*=============== VARIABLES CSS ===============*/
        :root {
            --header-height: 3.5rem;

            /*========== Colors ==========*/
            /*Color mode HSL(hue, saturation, lightness)*/
            --first-color: hsl(14, 98%, 50%);
            --black-color: hsl(0, 0%, 0%);
            --black-color-light: hsl(0, 0%, 40%);
            --white-color: hsl(0, 0%, 95%);
            --title-color: hsl(0, 0%, 0%);
            --text-color: hsl(0, 0%, 35%);
            --text-color-light: hsl(0, 0%, 64%);
            --body-color: hsl(0, 0%, 87%);
            --container-color: hsl(0, 0%, 83%);

            /*========== Font and typography ==========*/
            /*.5rem = 8px | 1rem = 16px ...*/
            --body-font: "Bai Jamjuree", sans-serif;
            --biggest-font-size: 2.5rem;
            --h1-font-size: 1.75rem;
            --h2-font-size: 1.25rem;
            --h3-font-size: 1.125rem;
            --normal-font-size: 0.938rem;
            --small-font-size: 0.813rem;
            --smaller-font-size: 0.75rem;

            /*========== Font weight ==========*/
            --font-regular: 400;
            --font-medium: 500;
            --font-semi-bold: 600;
            --font-bold: 700;

            /*========== z index ==========*/
            --z-tooltip: 10;
            --z-fixed: 100;
        }

        /*========== Responsive typography ==========*/
        @media screen and (min-width: 1150px) {
            :root {
                --biggest-font-size: 4.5rem;
                --h1-font-size: 3rem;
                --h2-font-size: 1.5rem;
                --h3-font-size: 1.25rem;
                --normal-font-size: 1rem;
                --small-font-size: 0.875rem;
                --smaller-font-size: 0.813rem;
            }
        }

        /*=============== BASE ===============*/
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }



        h1,
        h2,
        h3,
        h4 {
            color: var(--title-color);
            font-weight: var(--font-bold);
        }


        a {
            text-decoration: none;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        /*=============== THEME ===============*/
        .nav__buttons {
            display: flex;
            align-items: center;
            column-gap: 1rem;
        }

        .change-theme {
            font-size: 1.25rem;
            color: var(--title-color);
            cursor: pointer;
            transition: color .3s;
        }

        /*=============== REUSABLE CSS CLASSES ===============*/
        .container {
            max-width: 1120px;
            margin-inline: 1.5rem;
        }

        .grid {
            display: grid;
            gap: 1.5rem;
        }

        .section {
            padding-block: 4rem 2rem;
        }

       

        


        .section__title-2::after {
            top: initial;
            bottom: -4px;
        }





        .main {
            overflow: hidden;
            /* For animation ScrollReveal */
        }


        .about {
            background-color: #dfd6c817;
            transition: background-color 0.4s;
        }

        .about__container {
            row-gap: 0;
        }

        .about__perfil {
            position: relative;
            justify-self: center;
            margin-block: 2.5rem 4.5rem;
        }

        .about__image {
            width: 220px;
            margin-top: -100px;
        }

        .about__img {
            position: relative;
            border: 4px solid var(--white-color);
            z-index: 1;
            border-radius: 0.75rem;
            box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 24px;
        }










        .about__info {
            padding-left: 1.25rem;
        }

      

        





        /*=============== MEDIA QUERIES ===============*/
        /* For small devices */
        @media screen and (max-width: 340px) {
            .container {
                margin-inline: 1rem;
            }

            .about__image {
                width: 180px;
            }

        }

        /* For medium devices */
        @media screen and (min-width: 576px) {
            .about__container {
                grid-template-columns: 350px;
                justify-content: center;
            }
        }

        /* For large devices */
        @media screen and (min-width: 1150px) {
            .container {
                margin-inline: auto;
            }

            .about__container {
                grid-template-columns: 460px 525px;
                gap: 1rem 9rem;
                align-items: center;
                padding-block: 1rem;
            }

            .about__perfil {
                order: -1;
                grid-row: 1 / 3;
            }

            .about__image {
                width: 500px;
                margin-top: 150px;
            }

            .about__img {
                border: 6px solid var(--white-color);
            }

            .about__line {
                width: 80px;
                right: -2rem;
                top: 20rem;
            }

          
            .about__info {
                align-self: flex-start;
                padding-left: 3rem;
            }

           

           

        }
    </style>
    <div class="container-fluid">
        <section class="about section" id="about">
            <div class="about__container container grid">
               
    
                <div class="about__perfil">
                    <div class="about__image" style="margin-top: 20px;">
                        <h2 class="text-center"> OUR MISSION </h2>
                        <img src="./images/mission800.png" alt="image" >
    
    
                    </div>
                </div>
    
                <div class="about__info">
                    <p >
                    Our mission is to empower individuals with the knowledge and skills needed to succeed in the stock market. We provide practical, easy to understand training that helps our students make informed decisions, build their confidence, and achieve their financial goals. We are committed to creating a supportive learning environment where people of all backgrounds can learn to navigate the world of investing with clarity and confidence.
                    </p>
    
    
    
    
                </div>
            </div>
            <div class="about__container container grid">
    
    
                <div class="about__info">
                    <div class="about__image">
                        <img src="./images/vission800.png" alt="image" style="height: 300px; margin-top:40px;">
    
    
    
    
    
    
                    </div>
                </div>
    
                <div class="about__perfil">
    
                    <p >
                    <h2> OUR VISION </h2>
                    <p> Our vision is to become the leading stock market training institution, known for transforming beginners into skilled investors. We aim to make stock market education accessible to everyone, helping individuals unlock their full financial potential and build a brighter future. Through our innovative courses and expert guidance, we strive to inspire a new generation of successful investors who are equipped to navigate the financial markets with knowledge and confidence.
                    </p>
    
    
    
    
                </div>
            </div>
    
        </section>
    </div>
  

    


   


    <?php ;

include('includes/footer.php')

  ?>
</html>
