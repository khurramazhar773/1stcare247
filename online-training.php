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
    <title>1stCare | Online Training</title>
</head>

<body>

    <?php
    // Attach header.php
    require 'header.php';
    ?>

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
                                <h1>Online Training</h1>
                                <p class="text-white mb-0">
                                    All our agency workers undergo thorough induction training and receive annual<br>
                                    updates, ensuring full compliance with Care Quality Commission (CQC) standards.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- banner-end -->
            </div>
        </div>
    </div>

    <!-- service section-1 -->
    <section>
        <div class="w-100 float-left service-box-con">
            <div class="container">
                <div class="">
                    <div class="core-vaule-title">
                        <h2 class="text-center">
                            Online and In-Person Training
                        </h2>
                        <p class="text-center">
                            Our in-house trainer, a qualified RGN Nurse, delivers training to all staff, focusing on
                            both manual <br>and mechanical vital observations. Training is assessed through a
                            competence-based evaluation, <br>ensuring that workers not only understand the theory but
                            also apply it effectively in practice.
                        </p>
                    </div>
                    <div class="online-training-banner col-lg-12 col-md-12 col-sm-12">
                        <img src="assets/image/online-training-banner.png" alt="" class="online-train-banner-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-box -->

    <?php require 'contact-section.php'; ?>
    <!-- core-vaule-section -->
    <!-- news-letter-section -->
    <section>
        <div class="w-100 float-left news-letter-con">
            <div class="container">
                <div class="news-letter-inner-con banner-overlay-img">
                    <div class="row overlay-img align-items-center">
                        <div class="col-lg-6 col-md-5">
                            <div class="news-letter-title">
                                <h2 class="text-white mb-0">Subscribe to our
                                    Newsletter
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="news-letter-input-con position-relative">
                                <div class="news-letter-input-feild">
                                    <input type="email" placeholder="Enter Your Email:" class="w-100">
                                </div>
                                <button>
                                    <i class="far fa-envelope"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- news-letter-section -->
    <!-- logo-section -->
    <?php require 'footer-above-img.php'; ?>
    <!-- logo-section -->
    <!-- weight-footer-section -->
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