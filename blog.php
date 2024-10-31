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
   <title>1stCare | Blogs</title>
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
                        <h1>Blogs</h1>
                        <p class="text-white mb-0">
                           Stay informed with the latest insights, tips, and news <br>
                           in healthcare and social care through our expert-driven blog.
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
   <section class="blog-posts w-100 float-left mt-5">
      <div class="container">
         <div class="row">
            <div id="blog" class="col-xl-12">
               <div class="row">
                  <!-- Example of a blog post -->
                  <div class="col-xl-6">
                     <div class="float-left w-100 post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                           <div class="post-image">
                              <div class="CareImage-banner">
                                 <img alt="" src="assets/image/care-service-banner1.png"
                                    style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">The Role of Locum GPs in Healthcare</a>
                              </h2>
                              <p class="blog-links">
                                 Our healthcare staff provides skilled, compassionate care tailored to your needs. We
                                 offer flexible staffing solutions to ensure seamless support for your medical practice.
                              </p>
                              <!-- Initially hidden content -->
                              <div class="extra-content hidden">
                                 <p class="blog-links">
                                    Locum GPs play a critical role in ensuring that healthcare practices continue
                                    to provide services even when regular staff are unavailable.
                                 </p>
                                 <p class="blog-links">
                                    By offering flexible solutions, locum GPs support various healthcare settings.
                                 </p>
                              </div>
                              <a class="read-more item-link blog-links">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Repeat similar blog structure for other columns... -->
                  <div class="col-xl-6">
                     <div class="float-left w-100 post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                           <div class="post-image">
                              <div class="CareImage-banner">
                                 <img alt="" src="assets/image/care-service-banner2.png"
                                    style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">Nurses! The Backbone of Quality Patient Care</a>
                              </h2>
                              <p class="blog-links">
                                 Our pharmacists provide expert medication management and personalized care to enhance
                                 patient outcomes. We offer flexible staffing solutions.
                              </p>
                              <!-- Initially hidden content -->
                              <div class="extra-content hidden">
                                 <p class="blog-links">
                                    Locum GPs play a critical role in ensuring that healthcare practices continue
                                    to provide services even when regular staff are unavailable.
                                 </p>
                                 <p class="blog-links">
                                    By offering flexible solutions, locum GPs support various healthcare settings.
                                 </p>
                              </div>
                              <a class="read-more item-link blog-links">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Repeat similar blog structure for other columns... -->
                  <div class="col-xl-6">
                     <div class="float-left w-100 post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                           <div class="post-image">
                              <div class="CareImage-banner">
                                 <img alt="" src="assets/image/care-service-banner3.png"
                                    style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">Healthcare Assistants</a>
                              </h2>
                              <p class="blog-links">
                                 Our rehabilitation specialists focus on personalized recovery plans to help patients
                                 regain strength and independence. We provide expert support across physical,
                                 occupational, and speech therapies.
                              </p>
                              <!-- Initially hidden content -->
                              <div class="extra-content hidden">
                                 <p class="blog-links">
                                    Locum GPs play a critical role in ensuring that healthcare practices continue
                                    to provide services even when regular staff are unavailable.
                                 </p>
                                 <p class="blog-links">
                                    By offering flexible solutions, locum GPs support various healthcare settings.
                                 </p>
                              </div>
                              <a class="read-more item-link blog-links">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Repeat similar blog structure for other columns... -->
                  <div class="col-xl-6">
                     <div class="float-left w-100 post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                           <div class="post-image">
                              <div class="CareImage-banner">
                                 <img alt="" src="assets/image/care-service-banner4.png"
                                    style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">Ensuring Medication Safety</a>
                              </h2>
                              <p class="blog-links">
                                 Our general medicine team offers comprehensive care, addressing a wide range of medical
                                 conditions with expertise and compassion. We ensure high-quality, personalized
                                 treatment for patients of all ages.
                              </p>
                              <!-- Initially hidden content -->
                              <div class="extra-content hidden">
                                 <p class="blog-links">
                                    Locum GPs play a critical role in ensuring that healthcare practices continue
                                    to provide services even when regular staff are unavailable.
                                 </p>
                                 <p class="blog-links">
                                    By offering flexible solutions, locum GPs support various healthcare settings.
                                 </p>
                              </div>
                              <a class="read-more item-link blog-links">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Repeat similar blog structure for other columns... -->
                  <div class="col-xl-6">
                     <div class="float-left w-100 post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                           <div class="post-image">
                              <div class="CareImage-banner">
                                 <img alt="" src="assets/image/care-service-banner5.png"
                                    style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">The Benefits of Rehabilitation</a>
                              </h2>
                              <p class="blog-links">
                                 Discover highly skilled locum GPs ready to provide flexible, quality healthcare
                                 services when and where you need them. Our experienced team ensures continuity of care
                                 tailored to your practice's needs.
                              </p>
                              <!-- Initially hidden content -->
                              <div class="extra-content hidden">
                                 <p class="blog-links">
                                    Locum GPs play a critical role in ensuring that healthcare practices continue
                                    to provide services even when regular staff are unavailable.
                                 </p>
                                 <p class="blog-links">
                                    By offering flexible solutions, locum GPs support various healthcare settings.
                                 </p>
                              </div>
                              <a class="read-more item-link blog-links">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Repeat similar blog structure for other columns... -->
                  <div class="col-xl-6">
                     <div class="float-left w-100 post-item border mb-4">
                        <div class="post-item-wrap position-relative">
                           <div class="post-image">
                              <div class="CareImage-banner">
                                 <img alt=""
                                    src="assets/image/freepik__candid-image-photography-natural-textures-highly-r__4171.png"
                                    style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">Supporting Your Medical Practice</a>
                              </h2>
                              <p class="blog-links">
                                 Our experienced nurses deliver compassionate, patient-centered care across various
                                 specialties. Count on us for flexible, reliable nursing staff to support your
                                 healthcare team.
                              </p>
                              <!-- Initially hidden content -->
                              <div class="extra-content hidden">
                                 <p class="blog-links">
                                    Locum GPs play a critical role in ensuring that healthcare practices continue
                                    to provide services even when regular staff are unavailable.
                                 </p>
                                 <p class="blog-links">
                                    By offering flexible solutions, locum GPs support various healthcare settings.
                                 </p>
                              </div>
                              <a class="read-more item-link blog-links">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end coloumns -->
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- FOOTER -->

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
   <?php require 'footer.php'; ?>
   <!-- footer-section -->
   <script src="assets/js/blog.js"></script>
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