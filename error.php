<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/super-classes.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mobile.css">
    <title>Medtexh | service</title>
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
            </div>
        </div>
    </div>

    <section>
        <div class="container four-o-four-heading">
            <div class="inner-heading-error">
                <h1>404</h1>
                <span>Page not found</span>
            </div>
            <a href="index.php">
                <button class="error-btn">
                    Back to Home
                </button>
            </a>
        </div>
    </section>

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
</body>

</html>