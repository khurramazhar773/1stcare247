<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.php"><img src="assets/image/logo2.png" alt="logo-img" class="img-fluid"></a>
    <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-auto ml-lg-0">
            <li class="nav-item active">
                <a class="nav-link p-0 text-white" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-0 text-white" href="about.php">About</a>
            </li>

            <!-- Services dropdown -->
            <li class="nav-item position-relative">
                <div class="service-dropdown">
                    <a class="nav-link p-0 text-white" href="services.php">Services</a>
                    <i class="fa-solid fa-caret-down dropdown-icon" data-target="servicesDropdown"></i>
                </div>
                <div class="dropdown-menu p-0" id="servicesDropdown">
                    <a class="dropdown-item" href="care-services.php">Care Service</a>
                    <a class="dropdown-item" href="pharmasist.php">Pharmacists</a>
                </div>
            </li>

            <!-- Candidates dropdown -->
            <li class="nav-item position-relative">
                <div class="candidate-dropdown">
                    <a class="nav-link p-0 text-white">Candidates</a>
                    <i class="fa-solid fa-caret-down dropdown-icon" data-target="candidatesDropdown"></i>
                </div>
                <div class="dropdown-menu p-0" id="candidatesDropdown">
                    <a class="dropdown-item" href="online-registration.php">Online Registration</a>
                    <a class="dropdown-item" href="online-training.php">Online Training</a>
                    <a class="dropdown-item" href="workerAvalebilty.php">Worker Availability</a>
                    <a class="dropdown-item" href="document-Library.php">Document Library</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link p-0 text-white" href="career.php">Career</a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-0 text-white" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-0 text-white" href="contact.php">Contact</a>
            </li>
        </ul>
        <a href="tel:+12345678" class="navbar-btn text-white">
            <i class="fas fa-phone-volume"></i> +1 234 56 78
        </a>
    </div>
</nav>