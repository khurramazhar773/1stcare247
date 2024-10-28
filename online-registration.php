<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/image/Group100.svg" type="image/x-icon">
  <title>1stCare | Online Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/bootstarp/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/super-classes.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/mobile.css">
  <link rel="stylesheet" href="assets/css/form.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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


    <!-- Your 4-step form -->
    <form id="multiStepForm" class="online-form">
      <!-- 1 -->
      <div class="form-step active">
        <div class="form-inner-heading">
          <img src="assets/image/form-one.png" alt="">
          <h4>Step 1</h4>
        </div>
        <div class="form-inner-content">
          <span>Position Applying For</span>
        </div>
        <!-- 1 -->
        <div class="mb-3">
          <label for="position" class="form-label">Select Position</label>
          <select class="form-control form-options" id="position" required>
            <option value="Locum GP’s">Locum GP’s</option>
            <option value="Nurses">Nurses</option>
            <option value="Pharmacists">Pharmacists</option>
            <option value="Healthcare Workers">Healthcare Workers</option>
          </select>
        </div>
        <!-- 2 -->
        <div class="mb-3">
          <label for="workPreference" class="form-label">Work Preference</label>
          <select class="form-control" id="workPreference" required>
            <option value="Location">Location</option>
            <option value="Part-Time">Part Time</option>
            <option value="Full-Time">Full Time</option>
            <option value="Permanent">Permanent</option>
            <option value="Temporary">Temporary</option>
          </select>
        </div>
        <!-- 3 -->
        <div class="mb-3">
          <label for="travel" class="form-label">Willing to Travel</label>
          <select class="form-control" id="travel" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
        <!--  -->
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
        </div>
      </div>

      <!-- 2 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon1.png" alt="">
          <h4>Step 2</h4>
        </div>
        <div class="form-inner-content">
          <span>PERSONAL INFORMATION</span>
        </div>
        <div class="mb-3">
          <label for="fullName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>
      <!-- 3 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon2.png" alt="">
          <h4>Step 3</h4>
        </div>
        <div class="form-inner-content">
          <span>EDUCATIONAL BACKGROUND</span>
        </div>
        <div class="mb-3">
          <label for="degree" class="form-label">Highest Degree</label>
          <input type="text" class="form-control" id="degree" placeholder="Enter your highest degree" required>
        </div>
        <div class="mb-3">
          <label for="university" class="form-label">University / College</label>
          <input type="text" class="form-control" id="university" placeholder="Enter your institution" required>
        </div>
        <div class="mb-5">
          <label for="graduationYear" class="form-label">Year of Graduation</label>
          <input type="text" class="form-control" id="university" placeholder="Enter your graduation year" required>
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>
      <!-- 4 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon3.png" alt="">
          <h4>Step 4</h4>
        </div>
        <div class="form-inner-content">
          <span>PROFESSIONAL EXPERIENCE</span>
        </div>
        <div class="mb-3">
          <label for="position" class="form-label">Current Position</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter your current title" required>
        </div>
        <div class="mb-3">
          <label for="companyName" class="form-label">Company Name</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter your company ‘s name" required>
        </div>
        <div class="mb-5">
          <label for="position" class="form-label">Years of Experience</label>
          <input type="text" class="form-control" id="experience" placeholder="Enter years of Experience" required>
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning next-btn">Next</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>
      <!-- 5 -->
      <div class="form-step">
        <div class="form-inner-heading">
          <img src="assets/image/icon4.png" alt="">
          <h4>Step 5</h4>
        </div>
        <div class="form-inner-content">
          <span>ADDITIONAL INFORMATION</span>
        </div>
        <div class="mb-3">
          <label for="LinkedinProfile" class="form-label">Your Linkedin Profile (Optional)</label>
          <input type="text" class="form-control" id="linkedinProfile" placeholder="Enter your Linkedin profile"
            required>
        </div>
        <div class="mb-3">
          <label for="coverLetter" class="form-label">Your Cover Letter (Optional)</label>
          <textarea class="form-control" id="coverLetter" rows="5" placeholder="Write a brief cover letter"></textarea>
        </div>
        <div class="mb-3 form-group">
          <label for="imageUpload" class="form-label">Upload Your CV</label>
          <input type="file" class="form-control" id="imageUpload" placeholder="No file chosen" accept="image/*"
            multiple required>
          <div id="imageContainer" class="image-preview-container"></div>
        </div>
        <div class="form-inner-button">
          <button type="button" class="btn btn-warning submit-btn">Submit Application</button>
          <button type="button" class="btn btn-secondary back-btn">Back</button>
        </div>
      </div>
    </form>
    <!-- Success Message -->
    <div id="successMessage" class="success-container" style="display: none;">
      <div class="circle">
        <i class="fas fa-check check-icon"></i>
      </div>
      <div class="success-message">
        <h3>Submission Successful!</h3>
        <p>Your application has been submitted successfully. Thank you!</p>
      </div>
      <a href="index.php" class="btn-home submitted-success">Go to Home</a>
    </div>
  </div>

  <!-- footer section -->
  <?php require 'footer.php'; ?>
  <!--  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"> </script>
  <script src="assets/js/popper.min.js"> </script>
  <script src="assets/js/wow.js"></script>
  <script>
    new WOW().init();
  </script>
  <script src="assets/js/bootstrap.min.js"> </script>
  <script src="assets/js/custom-script.js"> </script>
  <script src="assets/js/script.js"></script>
</body>

</html>