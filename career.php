<!DOCTYPE HTML>
<html lang="zxx">

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="assets/css/animate.css">
   <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/super-classes.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/custom-style.css">
   <link rel="stylesheet" href="assets/css/mobile.css">

   <title>Career</title>
   <style>
      .career-hero-text {
         color: white;
         padding: 0 13rem 0 13rem;
         font-size: 1.2rem;
         font-weight: 400;
      }

      .bullet-points {
         display: flex;
         text-align: left;
      }

      .hiring-heading {
         display: flex;
         justify-content: center;
         align-items: center;
         text-align: center;
         padding: 4rem;
         color: #074560;
         font-size: 60px;
      }

      h2 {
         font-weight: 600;
      }

      .read-btn a {
         color: white;
         text-decoration: none;

      }

      .read-more-btn {
         width: 5rem;
         background-color: #FF8A00;

         text-decoration-color: white;
         padding: 6px 16px 6px 16px;
         border-radius: 20px;
      }

      .hiring-section {

         max-width: 800px;
         margin: 0 auto;
         text-align: center;
         padding: 18px;
      }

      p {
         font-size: 18px;
         margin-bottom: 20px;
         color: #074560;
      }

      .job-list {
         list-style-type: none;
         padding: 0;
         margin-bottom: 20px;
      }

      .job-list li {
         font-size: 22px;
         margin-bottom: 10px;
         position: relative;
         padding-left: 25px;
         color: #074560;

      }

      .job-list li::before {
         content: "●";

         color: #1d6788;
         position: absolute;
         left: 0;
         top: 0;
      }

    

      /* Responsive Design */
      @media (max-width: 768px) {
         h1 {
            font-size: 1.8em;
         }

         p,
         .job-list li {
            font-size: 1.1em;
         }
      }

      @media (max-width: 576px) {
         .hiring-heading {
            display: flex;
            padding: 2rem !important;


         }

         .career-hero-text {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
         }

         h1 {
            font-size: 1.5em;
         }

         p,
         .job-list li {
            font-size: 1em;
         }
      }
   </style>
</head>

<body>
   <!-- top-bar-section-->

   <div class="w-100 float-left top-bar-main-con text-white text-xl-left text-lg-left text-md-left text-center">
      <div class="container">
         <div class="row ">
            <div class="col-lg-6 col-md-6 col-12">
               <div class="top-bar-left-con ">
                  <i class="fas fa-map-marker-alt"></i>
                  <span>King Street Melbourne, 3000, Australia</span>
               </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
               <div class="top-bar-right-con d-flex">
                  <span>Get Social:</span>
                  <ul class="list-unstyled mb-0">
                     <li class="float-left"><a href="https://www.facebook.com/" class="text-white"><i class="fab fa-facebook-square"></i></a></li>
                     <li class="float-left"><a href="https://twitter.com/?lang=en" class="text-white"><i class="fab fa-twitter-square"></i></a></li>
                     <li class="float-left"><a href="https://www.pinterest.com/" class="text-white"><i class="fab fa-pinterest-square"></i></a></li>
                     <li class="float-left"><a href="https://www.youtube.com/" class="text-white"><i class="fab fa-youtube-square"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- top-bar-section-->
   <!-- header-and-banner-section -->
   <div class="w-100 float-left header-and-banner-con banner-overlay-img">
      <div class="container">
         <div class="overlay-img">
            <!-- navbar-start -->
            <nav class="navbar navbar-expand-lg navbar-light">
               <a class="navbar-brand" href="index.html"><img src="assets/image/logo-img.png" alt="logo-img" class="img-fluid"></a>
               <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mr-auto">
                     <li class="nav-item active ">
                        <a class="nav-link p-0 text-white" href="index.html">Home<span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link p-0 text-white" href="about.html">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link p-0 text-white" href="services.html">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link p-0 text-white" href="team.html">Team </a>
                     </li>
                     <li class="nav-item dropdown pr-lg-0">
                        <a class="nav-link dropdown-toggle p-0 text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Blog
                        </a>
                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="faq.html">Faq</a>
                           <a class="dropdown-item" href="four-column.html">four-column</a>
                           <a class="dropdown-item" href="infinite-scroll.html">infinite-scroll</a>
                           <a class="dropdown-item" href="load-more.html">load-more</a>
                           <a class="dropdown-item" href="one-column.html">one-column</a>
                           <a class="dropdown-item" href="six-colum-full-wide.html">six-colum-full-wide</a>
                           <a class="dropdown-item" href="three-column.html">three-colum-sidbar</a>
                           <a class="dropdown-item" href="three-colum-sidbar.html">three-column</a>
                           <a class="dropdown-item" href="two-column.html">two-column</a>
                        </div>
                     </li>
                     <li class="nav-item pr-0">
                        <a class="nav-link p-0 text-white" href="contact.html"> Contact </a>
                     </li>
                  </ul>
                  <a href="tel:+12345678" class="navbar-btn text-white">
                     <i class="fas fa-phone-volume"></i>
                     +1 234 56 78
                  </a>
               </div>
            </nav>
            <!-- navbar-end -->
            <!-- banner-start -->
            <section>
               <div class="w-100 float-left generic-banner-con text-xl-left text-lg-left text-center">
                  <div class="container">
                     <div class="generic-banner-content text-white text-center">
                        <h1>Career</h1>
                        <p class="career-hero-text">Join our team of dedicated healthcare
                           professionals—explore current opportunities and
                           take the next step in your career today.</p>
                     </div>

                  </div>
               </div>
            </section>
            <!-- banner-end -->
         </div>
      </div>
   </div>

   <div class="container">
      <section class="hiring-section">
         <h1 class="hiring-heading">We Are Hiring</h1>
         <p>1st care offers opportunities across the UK for experienced health and social care professionals who prioritize a service user-centered approach in their practice.</p>
         <p>If you have at least 6 months of experience in any of the following areas, we would love to hear from you:</p>
         <div class="bullet-points">
            <ul class="job-list pt-4">
               <li>Elderly Care Assistants</li>
               <li>Registered Nurses (RGN & RMN) for hospitals and care facilities</li>
               <li>Support Specialists – Learning Disabilities & Mental Health</li>
               <li>Healthcare Assistants for hospitals and care homes</li>
               <li>Locum General Practitioners (GPs)</li>
               <li>Licensed Social Workers</li>
            </ul>

         </div>
         <p class="pt-5">If you have at least 6 months of relevant
            experience, contact our dedicated recruitment team during
            office hours at +01 23 4567 8901 or +01 23 4567 8901.
            You can request an application pack by post or download the application form from the "Document Library"
            section on the 1st Med website.
            Please note that all job offers are contingent upon an enhanced DBS check.</p>
         <p class="pt-2">For complete details, explore our current vacancies listed below.
            To apply, simply fill out our Registration Form, upload your details, and we'll be in touch shortly.</p>
      </section>
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
                                 <img alt="" src="assets/image/care-service-banner1.png" style="max: width 1024px; width:100%; height: auto;">
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
                                 <img alt="" src="assets/image/care-service-banner2.png" style="max: width 1024px; width:100%; height: auto;">
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
                                 <img alt="" src="assets/image/care-service-banner3.png" style="max: width 1024px; width:100%; height: auto;">
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
                                 <img alt="" src="assets/image/care-service-banner4.png" style="max: width 1024px; width:100%; height: auto;">
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
                                 <img alt="" src="assets/image/care-service-banner5.png" style="max: width 1024px; width:100%; height: auto;">
                              </div>
                           </div>
                           <div class="post-item-description blog-component">
                              <h2 style="font-size: 23px;">
                                 <a class="blog-links">The Benefits of Rehabilitation</a>
                              </h2>
                              <p class="blog-links">
                              Discover skilled locum GPs ready to provide flexible, quality healthcare services when you need them. Our experienced team ensures tailored continuity of care for your practice.
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
                                 <img alt="" src="assets/image/care-service-banner6.png" style="max: width 1024px; width:100%; height: auto;">
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
   <!-- logo-section -->
   <div class="w-100 float-left logo-con">
      <div class="container">
         <div class="logo-inner-con">
            <div class="row">
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/collab-1 (1).png" alt="client-logo-img" class="img-fluid">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/collab-1 (2).png" alt="client-logo-img" class="img-fluid">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/collab-1 (3).png" alt="client-logo-img" class="img-fluid">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/collab-1 (4).png" alt="client-logo-img" class="img-fluid mb-0">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/collab-1 (5).png" alt="client-logo-img" class="img-fluid mb-0">
                  </figure>
               </div>
               <div class="col-lg-2 col-md-2 col-sm-4 col-4">
                  <figure class="mb-0">
                     <img src="assets/image/collab-1 (3).png" alt="client-logo-img" class="img-fluid mb-0">
                  </figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- logo-section end -->
   <!-- footer-section -->
   <?php
   // Attach footer.php
   require 'footer.php';
   ?>
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