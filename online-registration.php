<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1stCare | Online Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/super-classes.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/mobile.css">
  <link rel="stylesheet" href="assets/css/form.css"> <!-- Link to your custom CSS -->

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
                <h1>Online Registration</h1>
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

  <div class="container">

    <div class="form-heading-section">
      <h2 class="form-heading text-center">Join Our Healthcare Team</h2>
      <span class="form-text">
        Unlock your potential and make a real difference in healthcare.
        Fill out the form below to start your journey with us!
      </span>
    </div>

    <div class="form-content-section">
      <button class="form-button">Job Registration Form</buttonn>
        <div class="progress mt-4" style="height: 5px;">
          <div id="progressBar" class="progress-bar bg-success" role="progressbar" style="width: 25%;"
            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>


    <!-- Multi-step form -->
    <form id="multiStepForm" class="online-form">
      <!-- Step 1 -->
      <div class="form-step active">
        <div class="form-inner-heading">
          <img src="assets/image/icon1.png" alt="">
          <h4>Step 1</h4>
        </div>
        <div class="form-inner-content">
          <span>PERSONAL INFORMATION</span>
        </div>
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
        </div>
      </div>
      <!-- Step 2 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon2.png" alt="">
          <h4>Step 2</h4>
        </div>
        <div class="form-inner-content">
          <span>EDUCATIONAL BACKGROUND</span>
        </div>
        <div class="mb-3">
          <label for="degree" class="form-label">Highest Degree</label>
          <input type="text" class="form-control" id="degree" placeholder="Enter your highest degree">
        </div>
        <div class="mb-3">
          <label for="university" class="form-label">University / College</label>
          <input type="text" class="form-control" id="university" placeholder="Enter your institution">
        </div>
        <div class="mb-5">
          <label for="graduationYear" class="form-label">Year of Graduation</label>
          <input type="text" class="form-control" id="university" placeholder="Enter your graduation year">
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon3.png" alt="">
          <h4>Step 3</h4>
        </div>
        <div class="form-inner-content">
          <span>PROFESSIONAL EXPERIENCE</span>
        </div>
        <div class="mb-3">
          <label for="position" class="form-label">Current Position</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter your current title">
        </div>
        <div class="mb-3">
          <label for="companyName" class="form-label">Company Name</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter your company ‘s name">
        </div>
        <div class="mb-5">
          <label for="position" class="form-label">Years of Experience</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter years of Experience">
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon4.png" alt="">
          <h4>Step 4</h4>
        </div>
        <div class="form-inner-content">
          <span>ADDITIONAL INFORMATION</span>
        </div>
        <div class="mb-3">
          <label for="LinkedinProfile" class="form-label">Your Linkedin Profle (Optional)</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter your highest degree">
        </div>
        <div class="mb-3">
          <label for="LinkedinProfile" class="form-label">Your Cover Letter (Optional)</label>
          <textarea class="form-control" id="comments" rows="5" placeholder="Write a brief cover letter"></textarea>
        </div>
        <div class="mb-3 form-group col-lg-12 col-md-12 col-sm-12">
          <label for="LinkedinProfile" class="form-label">Upload Property Images</label>
          <input type="file" class="form-control" id="image-upload" placeholder="no file choosen" accept="image/*"
            multiple>
          <div id="imageContainer" class="image-preview-container"></div>
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Submit Application</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>
    </form>
  </div>

  <!-- footer section -->
  <section>
    <div class="w-100 float-left weight-footer-con">
      <div class="container">
        <div class="weight-footer-inner-con">
          <div class="row">
            <div class="col-lg-5 col-12 text-xl-left text-lg-left text-center">
              <div class="weight-footer-content ">
                <figure>
                  <img src="assets/image/footer-logo.png" alt="footer-logo" class="img-fluid">
                </figure>
                <p class="col-lg-11 col-md-7 pl-0 pr-0 ml-lg-0 mr-lg-0 ml-md-auto mr-md-auto">Lorem ipsum
                  dolor sit amet, consectetur adipiscing elitsed do eiusmod tempororem ipsum dolor sit am
                  econsect ametconsectetetur adipiscing.</p>
                <div class="weight-social-list">
                  <ul class="list-unstyled mb-0">
                    <li class="d-inline-block"><a href="https://www.facebook.com/"><i
                          class="fab fa-facebook-square d-flex align-items-center justify-content-center text-white pr-0"></i></a>
                    </li>
                    <li class="d-inline-block"><a href="https://twitter.com/?lang=en"><i
                          class="fab fa-twitter-square d-flex align-items-center justify-content-center text-white pr-0"></i></a>
                    </li>
                    <li class="d-inline-block"><a href="https://www.linkedin.com/signup"><i
                          class="fab fa-linkedin d-flex align-items-center justify-content-center text-white pr-0"></i></a>
                    </li>
                    <li class="d-inline-block"><a href="https://www.pinterest.com/"><i
                          class="fab fa-pinterest-square mr-0 d-flex align-items-center justify-content-center text-white pr-0"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 col-6">
              <div class="weight-footer-content">
                <h5>Important Link</h5>
                <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-caret-right"></i>Appointment</li>
                  <li><i class="fas fa-caret-right"></i>Doctors</li>
                  <li><i class="fas fa-caret-right"></i>Services</li>
                  <li><i class="fas fa-caret-right"></i>Specialties</li>
                  <li><i class="fas fa-caret-right"></i>Neurology</li>
                  <li class="mb-0"><i class="fas fa-caret-right"></i>Oncology</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-3 col-6">
              <div class="weight-footer-content">
                <h5>Support</h5>
                <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-caret-right"></i>Support</li>
                  <li><i class="fas fa-caret-right"></i>Contact Us</li>
                  <li><i class="fas fa-caret-right"></i>Knowledge Base</li>
                  <li><i class="fas fa-caret-right"></i>About Us</li>
                  <li><i class="fas fa-caret-right"></i>Faq</li>
                  <li class="mb-0"><i class="fas fa-caret-right"></i>Partnerships</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-5 col-12">
              <div class="weight-footer-content">
                <h5>Get in Touch</h5>
                <ul class="list-unstyled mb-0">
                  <li><span>Email: </span>info@medtexh.com</li>
                  <li><span>Phone: </span>+1 234 567 89 0 0</li>
                  <li><span>Fax: </span>+1 ( 987 ) 654 321 9 9</li>
                  <li class="mb-0"><span class="pr-2">Address:</span>King Street Melbourne,
                    3000, Australia
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- weight-footer-section -->
  <!-- footer-section -->
  <div class="w-100 float-left footer-con text-xl-left text-lg-left text-center">
    <div class="container">
      <div class="row">
        <div class="footer-heading col-lg-6 col-md-6 col-12">
          <p class="mb-0">@1stcare247. All Rights Reserved</p>
        </div>
        <div class="footer-heading col-lg-6 col-md-6 col-12">
          <p class="mb-0">
            Developed and Maintained By :  <a href="https://csoftsystems.com/" target="_blank">Csoft Systems</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script> <!-- Link to your custom JS -->
</body>

</html>