<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="assets/image/Group100.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/super-classes.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <title>1stCare | Care-Services</title>

    <style>
        .care-services-anchors {
            color: #074560;
            font-size: 24px;
        }

        .care-services-anchors:hover {
            color: #074560;
            text-decoration: none;
        }

        .care-services-anchors2 {
            color: orange;
        }

        .care-services-anchors2:hover {
            color: #074560;
            text-decoration: none;
        }

        .care-services-banner-img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <!-- top-bar-section-->
    <?php
    // Attach header.php
    require 'header.php';
    ?>
    <!-- top-bar-section-->
    <!-- header-and-banner-section -->
    <!-- feature-box -->
    <div class="w-100 float-left header-and-banner-con banner-overlay-img">
        <div class="container">
            <div class="overlay-img">
                <!-- navbar-start -->
                <?php require 'nav.php' ?>
                <!-- navbar-end -->
                <!-- banner-start -->
                <section>
                    <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                        <div class="container">
                            <div class="generic-banner-content text-white text-center">
                                <h1>Care Services</h1>
                                <p class="text-white mb-0">
                                    Providing personalized, expert care with compassion, <br /> ensuring your well-being
                                    at every
                                    step
                                    of your health journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner-end -->
            </div>
        </div>
    </div>


    <!-- header-and-banner-section -->
    <section class=" blog-posts w-100 float-left" style="padding: 40px 0px;">
        <div class="container">
            <div class="row">
                <div id="blog" class="col-xl-12">
                    <div class="row">

                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="assets/image/care-service-banner1.png  "
                                                class="care-services-banner-img">
                                        </a>
                                        <!--post-image-->
                                    </div>
                                    <div class="post-item-description">
                                        <h2><a href="#" class="care-services-anchors">Locum GP’s</a></h2>
                                        <p>
                                            Discover highly skilled locum GPs ready to provide flexible, quality
                                            healthcare services when and where you need them. Our experienced team
                                            ensures continuity of care tailored to your practice's needs.
                                        </p>
                                        <a href="services.php" class="item-link care-services-anchors2">Explore Our Care
                                            Services</a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-audio position-relative">
                                        <a href="#">
                                            <img alt="" src="assets/image/care-service-banner2.png  "
                                                class="care-services-banner-img">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2>
                                            <a href="#" class="care-services-anchors">Nurses</a>
                                        </h2>
                                        <p>
                                            Our experienced nurses deliver compassionate, patient-centered care across
                                            various specialties. Count on us for flexible, reliable nursing staff to
                                            support your healthcare team.
                                        </p>
                                        <a href="services.php" class="item-link care-services-anchors2">Explore Our Care
                                            Services</a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-image">
                                        <img alt="" src="assets/image/care-service-banner3.png   "
                                            class="care-services-banner-img">
                                    </div>
                                    <div class="post-item-description">
                                        <h2>
                                            <a href="services.php" class="care-services-anchors">Healthcare
                                                Assistants</a>
                                        </h2>
                                        <p>
                                            Our healthcare staff provides skilled, compassionate care
                                            tailored to your needs. We offer flexible staffing
                                            solutions to ensure seamless support for your medical
                                            practice.
                                        </p>
                                        <a href="services.php" class="item-link care-services-anchors2">Explore Our Care
                                            Services</a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div id="blogslider" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/image/care-service-banner4.png" alt=""
                                                    class="care-services-banner-img">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item-description">
                                        <h2><a href="services.php" class="care-services-anchors">Pharmacists</a></h2>
                                        <p>
                                            Our pharmacists provide expert medication management and personalized care
                                            to enhance patient outcomes. We offer flexible staffing solutions to meet
                                            your pharmacy service needs
                                        </p>
                                        <a href="services.php" class="item-link care-services-anchors2">Explore Our Care
                                            Services</a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                        <div class='embed-container'>
                                            <img src="assets/image/care-service-banner5.png" alt=""
                                                class="care-services-banner-img">
                                        </div>
                                    </div>
                                    <div class="post-item-description">
                                        <h2><a href="#" class="care-services-anchors">Rehab</a></h2>
                                        <p>
                                            Our rehabilitation specialists focus on personalized recovery plans to help
                                            patients regain strength and independence. We provide expert support across
                                            physical, occupational, and speech therapies.
                                        </p>
                                        <a href="services.php" class="item-link care-services-anchors2">Explore Our Care
                                            Services</a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                            </div>
                            <!--col-->
                        </div>
                        <div class="col-xl-6">
                            <div class="float-left w-100 post-item border mb-4">
                                <div class="post-item-wrap position-relative">
                                    <div class="post-video">
                                        <div class="fluid-width-video-wrapper">
                                            <img src="assets/image/care-service-banner6.png" alt=""
                                                class="care-services-banner-img">
                                        </div>
                                        <!--post-video-->
                                    </div>
                                    <div class="float-left w-100 post-item-description">
                                        <h2><a href="#" class="care-services-anchors">General Medicine</a></h2>
                                        <p>
                                            Our general medicine team offers comprehensive care, addressing a wide range
                                            of medical conditions with expertise and compassion. We ensure high-quality,
                                            personalized treatment for patients of all ages.
                                        </p>
                                        <a href="services.php" class="item-link care-services-anchors2">Explore Our Care
                                            Services</a>
                                        <!--post-item-description-->
                                    </div>
                                    <!--post-item-wrap-->
                                </div>
                                <!--post-item-->
                            </div>
                            <!--col-->
                        </div>
                    </div>
                    <!--blog-->
                </div>
            </div>
            <!--container-->
        </div>
    </section>
    <!-- FOOTER -->
    <!-- logo-section -->
    <div class="w-100 float-left logo-con">
        <div class="container">
            <div class="logo-inner-con">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <figure class="mb-0">
                            <img src="assets/image/qwerty1.png" alt="client-logo-img" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <figure class="mb-0">
                            <img src="assets/image/qwerty2.png" alt="client-logo-img" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <figure class="mb-0">
                            <img src="assets/image/qwerty3.png" alt="client-logo-img" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <figure class="mb-0">
                            <img src="assets/image/qwerty4.png" alt="client-logo-img" class="img-fluid mb-0">
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <figure class="mb-0">
                            <img src="assets/image/qwerty5.png" alt="client-logo-img" class="img-fluid mb-0">
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                        <figure class="mb-0">
                            <img src="assets/image/qwerty2.png" alt="client-logo-img" class="img-fluid mb-0">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- logo-section -->

    <?php require 'footer.php'; ?>
    <!-- footer-section -->
    <script src="assets/js/jquery-3.6.0.min.js"> </script>
    <script src="assets/js/popper.min.js"> </script>
    <script src="assets/js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="assets/js/bootstrap.min.js"> </script>
    <script src="assets/js/custom-script.js"> </script>
    <script src="assets/js/navbar.js"> </script>
</body>

</html>