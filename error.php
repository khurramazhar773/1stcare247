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