<?php
    include('dbcon.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ChykeTech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/enroll.css">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">ChykeTech</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a class="active" href="enroll.php">Enroll Now</a></li>
            <li><a href="login.php">Log in</a></li>
          <!-- <li><a href="pricing.php">Pricing</a></li> -->

          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <!-- <a href="courses.php" class="get-started-btn">Get Started</a> -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Enroll Now!</h2>
        <p style="color: #ff0000; font-size: 20px;"> * Please make sure your bio-data is correct!</p>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

            </div>
        </div>


        <div class="containa signupp">
        
            <!-- <div class="title">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="IMG/reg/doctor1.png" alt="Tomiwa" onclick="dp();">
            </div> -->

            <!-- <div class="col-lg-6 "> -->
            <form action="">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Title</span>
                        <input type="text" placeholder="Mr / Miss" name="title">
                    </div> 
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter your name" name="fname">
                    </div>
                    <div class="input-box">
                        <span class="details">Date of Birth</span>
                        <input type="date"  name="dob">
                    </div>
                    <div class="input-box">
                        <span class="details">State of Origin</span>
                        <input type="text" placeholder="Enter your state of origin" name="soo">
                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" placeholder="City" name="city">
                    </div>
                    <div class="input-box">
                        <span class="details">Nationality</span>
                        <input type="text" placeholder="Nationality" name="nationality">
                    </div>
                    <div class="input-box">
                        <span class="details">Residential Address</span>
                        <input type="text" placeholder="Enter your residential address" name="address">
                    </div>
                    <div class="input-box">
                        <span class="details">Religion</span>
                        <input type="text" placeholder="Religion" name="religion">
                    </div>
                    <div class="input-box">
                        <span class="details">Name of Guarantor</span>
                        <input type="text" placeholder="Enter name of guarantor" name="guarantor_name">
                    </div>
                    <div class="input-box">
                        <span class="details">Guarantor's Title</span>
                        <input type="text" placeholder="Enter guarantor's title" name="guarantor_title">
                    </div>
                    <div class="input-box">
                        <span class="details">Guarantor's phone number</span>
                        <input type="text" value="+234" name="guarantor_phonenum" class="input-number">
                    </div>
                    <div class="input-box">
                        <span class="details">Jamb reg</span>
                        <input type="text" placeholder="Enter your Jamb registration number" name="jamb_reg">
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input-box">
                        <span class="details">Phone number</span>
                        <input type="text" value="+234" name="phonenum">
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="number" placeholder="Enter your password" name="pass" class="input-number">
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm password</span>
                        <input type="number" placeholder="confirm your password" name="conpass" class="input-number">
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" value="Male" name="gender" id="dot-1">
                    <input type="radio" value="Female" name="gender" id="dot-2">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                    </div>
                </div>
                <div class="button butts">
                    <button type="submit" value="Register">Register</button>
                    <!-- <input type="submit" value="Register"> -->
                </div>
    
    
                <div class="error-txtt"></div>
            </form>
        </div>
    


<!-- 
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>  -->

        </div>
      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="margin-top: 900px;">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>ChykeTech</h3>
            <p>
              Imo Street <br>
              Ilesa, Osun state<br>
              NIGERIA <br><br>
              <strong>Phone:</strong> +23489 55488 55<br>
              <strong>Email:</strong> chyketech@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul> -->
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>You consider getting updates about CHYKETECH INSTITUTE in your mail?</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>ChykeTech</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ChykeTech-free-education-bootstrap-theme/ -->
          Designed by <a href="https://api.whatsapp.com/send?phone=+2349061959906&text=This%20is%20AYOTOMIWA,%20what%20is%20your%20name?">AYOTOMIWA OTI</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://api.whatsapp.com/send?phone=+2349061959906&text=This%20is%20AYOTOMIWA,%20what%20is%20your%20name?" class="twitter"><i class="bx bxl-whatsapp"></i></a>
        <!-- <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/validator.js"></script>
</body>

</html>