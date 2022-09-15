<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - Company Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Company - v4.8.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php 
include('include/header.php');
?>
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg); ">
          <div class="carousel-container">
            
              <h2 style="color: white;">Contact Us</h2>
          </div>
        </div>
      </div>

     

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>
  <main id="main">

    <section id="contact" class="contact">
      <div class="container">
         
        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-6 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Belapur-Navi Mumbai</h4>
                  <p>Office No. 69, Thapar Complex, Plot No. 51, Sec - 15, CBD Belapur, Navi Mumbai - 400 614.</p><br>
                </div>
                <div class="col-lg-6 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Ulwe-Navi Mumbai</h4>
                  <p>Office No. 03, Sai Villa, Plot No. 75, Sector - 20, Ulwe, Navi Mumbai - 410 206</p>
                </div>
              </div>
                <div class="row">
                <div class="col-lg-6 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@capeezacorp.com</p>
                </div>

                <div class="col-lg-6 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+91 9371151356</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          
          <div class="col-lg-10">
            
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Phone No" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-control" name="email" id="email" placeholder="Qualification"><option selected="" disabled="">Qualification</option>
                    <option value="CA">Chartered Accountant (CA)</option>
                    <option value="post_graduate">Post Graduate</option>
                    <option value="graduate">Graduate</option>
                    <option value="under_graduate">Under Graduate</option></select>
                 
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Salary Expectation" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Upload Resume" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
      
        </div>

      </div>
    </section><!-- End Contact Section -->
    <div class="map-section">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.2284894827885!2d73.02773300308638!3d19.009650711678756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3a9bf2fffff%3A0xeb634f15869eb16e!2sHotel%20Grande%2051!5e0!3m2!1sen!2sin!4v1663064036246!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>Company</h3>
            <p>
              We are located at Pune and<br> Navi Mumbai providing a wide<br>  range of services on PAN India<br> basis and across the Globe. <br><br>
              <strong>Phone:</strong>  +91 9371151356<br>
              <strong>Email:</strong>info@capeezacorp.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">
                Income Tax Department</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">
                Central Board Of Excise & Custom</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">
                E-Tax Information Network</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">
                Ministry Of Company Affairs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Employees Provident fund</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">GST</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">RERA</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Connect With Us</h4>
            <ul>
              <h6>Manchar</h6>
              <li><i class="bi bi-geo-alt"></i> <a href="#">
                Trimurti pride, Below Bank of Maharashtra, Manchar, Pune - 410 503</a></li>
                <h6>Pune</h6>
                <li><i class="bi bi-geo-alt"></i> <a href="#">
                  Kunal Icon Road, Pimple Saudagar, Pune - 411 027</a></li>
                  <h6>Navi Mumbai</h6>
                  <li><i class="bi bi-geo-alt"></i> <a href="#">
                    03, Sai Villa, Plot No. 75, Sector - 20, Ulwe, Navi Mumbai - 410 206</a></li>
                   
                    <li><i class="bi bi-geo-alt"></i> <a href="#">
                      Office No. 69, Thapar Complex, Plot No. 51, Sec - 15, CBD Belapur, Navi Mumbai - 400 614.</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>2022 Capeeza Corp Services|</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="credits" style="float: right;">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
        Designed by <a href="https://tectignis.in/"> Tectignis IT Solutions.</a>
      </div>
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>