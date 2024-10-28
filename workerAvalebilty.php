<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="icon" href="assets/image/Group100.svg" type="image/x-icon">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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
                           we prioritize dependable, round-the-clock support for our clients. To ensure you get the care
                           and assistance<br> you need, our skilled and compassionate team members are available based on
                           your requirements.
                        </p>
                     </div>
                  </div>
               </div>
            </section>
            <!-- banner-end -->
         </div>
      </div>
   </div>

   <section class="worker-section">
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
   <section>
      <div class="w-100 float-left form-main-con mt-5" id="contact-form">
         <div class="container">
            <div class="text-center">
               <h2>Schedule Healthcare Support</h2>

               <p>Schedule Healthcare Support today and connect with our team of experienced Locum GPs, nurses,
                  healthcare <br> assistants, and pharmacy locums. We provide flexible appointment options to ensure you
                  receive timely, <br> professional care tailored to your needs.
               </p>
            </div>
            <div class="row">
               <div class="col-lg-6 order-xl-0 order-lg-0 order-2">
                  <div class="form-left-con position-relative text-center">
                     <figure class="mb-0 left-curve-img wow slideInLeft">
                        <img src="assets/image/small-left-curve-img.png" alt="" class="img-fluid">
                     </figure>
                     <figure class="mb-0">
                        <img src="assets/image/today-new-banner.png" alt="form-left-img"
                           class="img-fluid human-img form-left-img">
                     </figure>
                     <figure class="mb-0 right-curve-img wow slideInRight">
                        <img src="assets/image/small-right-curve-img.png" alt="" class="img-fluid">
                     </figure>
                  </div>
               </div>
               <div class="col-lg-6">
                  <form class="contact-form">
                     <div class="form-group">
                        <label for="exampleFormControlSelect1" class="text-white">Department</label>
                        <select class="form-control position-relative" id="exampleFormControlSelect1">
                           <option>General Health Checkup</option>
                           <option>General Health Checkup</option>
                           <option>General Health Checkup</option>
                           <option>General Health Checkup</option>
                           <option>General Health Checkup</option>
                        </select>
                        <i class="fas fa-angle-down"></i>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <input type="text" class="form-control" placeholder="Name:" name="name" id="name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <input type="email" class="form-control" placeholder="Email:">
                              <small id="emailHelp" class="form-text text-muted"></small>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <input type="time" class="form-control">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                           <div class="form-group">
                              <select class="form-control position-relative">
                                 <option>Choose Doctor </option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                                 <option>5</option>
                              </select>
                              <i class="fas fa-angle-down down-icon"></i>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="textarea form-group W-100">
                              <textarea class="form-control " placeholder="Message:" rows="3" name="comments"
                                 id="comments"></textarea>
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="btn  appointment-btn">Make Appointment</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
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
   <div class="w-100 float-left logo-con">
      <div class="container">
         <div class="logo-inner-con">
            <div class="row">
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/logo1.png" alt="client-logo-img" class="img-fluid">
                  </figure>
               </div>

               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/logo2.png" alt="client-logo-img" class="img-fluid">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/logo3.png" alt="client-logo-img" class="img-fluid mb-0">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/logo4.png" alt="client-logo-img" class="img-fluid mb-0">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/logo5.png" alt="client-logo-img" class="img-fluid mb-0">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/logo3.png" alt="client-logo-img" class="img-fluid mb-0">
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