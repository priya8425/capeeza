<?php 
include("admin/_includes/config.php");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$message=$_POST['message'];


$sql=mysqli_query($conn,"INSERT INTO `contact`(`name`, `phone`, `subject`, `email`, `message`)
 VALUES ('$name','$phone','$subject','$email','$message')");
  
  if($sql==1){
     header("location:contact.php");
  }else{
      mysqli_error($conn);
  }

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact Us - Capeeza</title>
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

            <!-- <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Pune</h4>
                  <p>F - 03, Ganraj Heights, S.N. 22/8, Sainikwadi, Wadgaon Sheri, Pune - 411 014</p><br>
                </div>
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Manchar</h4>
                  <p>Trimurti pride, Below Bank of Maharashtra, Manchar, Pune - 410 503.</p><br>
                </div>
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Navi Mumbai</h4>
                  <p>Office No. 69, Thapar Complex, Plot No. 51, Sec - 15, CBD Belapur, Navi Mumbai - 400 614.</p><br>
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
            </div> -->

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-6 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Pune</h4>
                  <p>F - 03, Ganraj Heights, S.N. 22/8, Sainikwadi, Wadgaon Sheri, Pune - 411 014</p><br>
                </div>
                <div class="col-lg-6 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Manchar</h4>
                  <p>Trimurti pride, Below Bank of Maharashtra, Manchar, Pune - 410 503.</p><br>
                </div>
               
              </div>
                <div class="row">
                <div class="col-lg-6 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Navi Mumbai</h4>
                  <p>Office No. 69, Thapar Complex, Plot No. 51, Sec - 15, CBD Belapur, Navi Mumbai - 400 614.</p><br>
                </div>
                <div class="col-lg-3 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@capeezacorp.com</p>
                </div>

                <div class="col-lg-3 info mt-4 mt-lg-0">
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
            
            <form action="" method="post" class="php-email-form1">
              
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
                  <input type="text" name="phone" class="form-control" id="name" placeholder="Phone No" required>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="subject" class="form-control" id="subject" placeholder="subject" required>
                </div>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
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
  <?php 
include('include/footer.php');
?>
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