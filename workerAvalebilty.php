<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="icon" href="assets/image/Group100.svg" type="image/x-icon">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/super-classes.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/mobile.css">
   <title>1stCare | Worker Availbility</title>

</head>


<body>
   <!-- top-bar-section-->

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
                        <h1>Worker Availability</h1>
                        <p class="text-white mb-0">
                           Check the real-time availability of our skilled <br>healthcare professionals, ready to
                           support your needs.
                        </p>
                     </div>
                  </div>
               </div>
            </section>
            <!-- banner-end -->
         </div>
      </div>
   </div>

   <section class="worker-section mb-5">
      <div class="container availability-section">
         <div class="header">
            <div class="header mb-3"
               style="width: fit-content; margin: auto; color: #ff8a00; font-size: 2rem; font-weight: bold;">WORKER
               AVAILABILITY</div>
         </div>
         <form>
            <div class="row mb-3">
               <div class="col-md-4 mb-2">
                  <input type="text" placeholder="Your Name" required>
               </div>
               <div class="col-md-4 mb-2">
                  <input type="email" placeholder="Email" required>
               </div>
               <div class="col-md-4 mb-2">
                  <input type="tel" placeholder="Telephone" required>
               </div>
            </div>
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Availability</th>
                     <th>Tue 22nd</th>
                     <th>Wed 23rd</th>
                     <th>Thu 24th</th>
                     <th>Fri 25th</th>
                     <th>Sat 26th</th>
                     <th>Sun 27th</th>
                     <th>Mon 28th</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>AD - ALL DAY</td>
                     <td><input type="radio" name="day1" value="AD"></td>
                     <td><input type="radio" name="day2" value="AD"></td>
                     <td><input type="radio" name="day3" value="AD"></td>
                     <td><input type="radio" name="day4" value="AD"></td>
                     <td><input type="radio" name="day5" value="AD"></td>
                     <td><input type="radio" name="day6" value="AD"></td>
                     <td><input type="radio" name="day7" value="AD"></td>
                  </tr>
                  <tr>
                     <td>AN - ALL NIGHT</td>
                     <td><input type="radio" name="day1" value="AN"></td>
                     <td><input type="radio" name="day2" value="AN"></td>
                     <td><input type="radio" name="day3" value="AN"></td>
                     <td><input type="radio" name="day4" value="AN"></td>
                     <td><input type="radio" name="day5" value="AN"></td>
                     <td><input type="radio" name="day6" value="AN"></td>
                     <td><input type="radio" name="day7" value="AN"></td>
                  </tr>
                  <tr>
                     <td>AM - ONLY MORNING</td>
                     <td><input type="radio" name="day1" value="AM"></td>
                     <td><input type="radio" name="day2" value="AM"></td>
                     <td><input type="radio" name="day3" value="AM"></td>
                     <td><input type="radio" name="day4" value="AM"></td>
                     <td><input type="radio" name="day5" value="AM"></td>
                     <td><input type="radio" name="day6" value="AM"></td>
                     <td><input type="radio" name="day7" value="AM"></td>
                  </tr>
                  <tr>
                     <td>PM - ONLY AFTERNOON</td>
                     <td><input type="radio" name="day1" value="PM"></td>
                     <td><input type="radio" name="day2" value="PM"></td>
                     <td><input type="radio" name="day3" value="PM"></td>
                     <td><input type="radio" name="day4" value="PM"></td>
                     <td><input type="radio" name="day5" value="PM"></td>
                     <td><input type="radio" name="day6" value="PM"></td>
                     <td><input type="radio" name="day7" value="PM"></td>
                  </tr>
                  <tr>
                     <td>F - FLEXIBLE</td>
                     <td><input type="radio" name="day1" value="F"></td>
                     <td><input type="radio" name="day2" value="F"></td>
                     <td><input type="radio" name="day3" value="F"></td>
                     <td><input type="radio" name="day4" value="F"></td>
                     <td><input type="radio" name="day5" value="F"></td>
                     <td><input type="radio" name="day6" value="F"></td>
                     <td><input type="radio" name="day7" value="F"></td>
                  </tr>
               </tbody>
            </table>
            <div class="text-center">
               <button type="submit" class="submit-btn">Submit Availability</button>
            </div>
         </form>
      </div>
   </section>

   <!-- table end -->
   <!-- form-section -->
   <?php require 'contact-section.php'; ?>
   <!-- form-section -->


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