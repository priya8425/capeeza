
<?php 
include("admin/_includes/config.php");

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $salary=$_POST['salary'];
  $email=$_POST['email'];
  $qualification=$_POST['qualification'];
  $message=$_POST['message'];

$file=$_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name']; 
$loc="assets/img/images/".$file; 
move_uploaded_file($tmp_name, $loc);

$sql=mysqli_query($conn,"INSERT INTO `career`(`name`, `phone`, `salary`, `email`, `qualification`,`file`, `message`) 
 VALUES ('$name','$phone','$salary','$email','$qualification','$file','$message')");
  
  if($sql==1){
     header("location:career.php");
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

  <title>Career - Capeeza</title>
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
            
              <h2 style="color: white;">Career</h2>
          </div>
        </div>
      </div>

     

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section>
  <main id="main">

    <section id="contact" class="contact">
      <div class="container">
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          
          <div class="col-lg-10">
            
            <form action="" method="post" role="form" class="php-email-form1"  enctype="multipart/form-data">
              
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
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <select class="form-control" name="qualification" id="email" placeholder="Qualification"><option selected="" disabled="">Qualification</option>
                    <option value="CA">Chartered Accountant (CA)</option>
                    <option value="Post Graduate">Post Graduate</option>
                    <option value="Graduate">Graduate</option>
                    <option value="Under Graduate">Under Graduate</option></select>
                 
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="salary" class="form-control" id="name" placeholder="Salary Expectation" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="file" class="form-control" name="file" id="email" placeholder="Upload Resume" required>
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