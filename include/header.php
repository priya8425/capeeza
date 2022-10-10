<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>


 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="index.php"><span>Com</span>pany</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo-capeeza.webp" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php" class="<?= $page == 'index.php' ? 'active':'' ?>">Home</a></li>
          <li><a href="about.php" class="<?= $page == 'about.php' ? 'active':'' ?>">About Us</a></li>

          <li class="dropdown"><a href="#"  class="<?=$page == 'accounting-auditing.php'|| $page == 'EXIM.php' || $page == 'Registration.php'|| $page == 'Tax-Advisory.php'||$page == 'Business-Advisory.php'||$page == 'Business-Setup.php'||$page == 'Virtual-CFO.php'||$page == 'Working-Capital.php' || $page == 'RBI-FEMA-Cmpliance.php'|| $page == 'ROC-Compliance.php' || $page == 'SEBI-Compliance.php' ||$page == 'MCA.php' || $page == 'International-Taxation.php' || $page == 'Working-Capital.php'|| $page == 'Project-Finance.php' || $page == 'Unsecured-Business-Loan.php' || $page == 'LAP.php' ||$page == 'Home-Loan.php' ? 'active':'' ?>"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
             
              <li class="dropdown"><a href="#"  class="<?=$page == 'accounting-auditing.php'|| $page == 'Tax-Advisory.php'||$page == 'Business-Advisory.php'||$page == 'Business-Setup.php'||$page == 'Virtual-CFO.php'||$page == 'International-Taxation.php' ? 'active':'' ?>"><span>Corporate</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                 
                                <li><a href="accounting-auditing.php" class="Acc <?= $page == 'accounting-auditing.php' ? 'active':'' ?>">Accounting &amp; Auditing</a></li>
                                <li><a href="Tax-Advisory.php" class="TaxAdv <?= $page == 'Tax-Advisory.php' ? 'active':'' ?>">Tax Advisory</a></li>
                                <li><a href="Business-Advisory.php" class="BusiAdv <?= $page == 'Business-Advisory.php' ? 'active':'' ?>">Business Advisory</a></li>
                                <li><a href="Business-Setup.php" class="BusiSet <?= $page == 'Business-Setup.php' ? 'active':'' ?>">Business Setup</a></li>
                                <li><a href="Virtual-CFO.php" class="Virtual <?= $page == 'Virtual-CFO.php' ? 'active':'' ?>">Virtual SFO Services</a></li>
                                <li><a href="International-Taxation.php" class="IntTax <?= $page == 'International-Taxation.php' ? 'active':'' ?>">International Taxation</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="<?= $page == 'Working-Capital.php'|| $page == 'Project-Finance.php' || $page == 'Unsecured-Business-Loan.php' || $page == 'LAP.php' ||$page == 'Home-Loan.php'  ? 'active':'' ?>"><span>Finance</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                 
                                <li><a href="Working-Capital.php" class="Acc <?= $page == 'Working-Capital.php' ? 'active':'' ?>">Working &amp; Capital</a></li>
                                <li><a href="Project-Finance.php" class="TaxAdv <?= $page == 'Project-Finance.php' ? 'active':'' ?>">Project Finance</a></li>
                                <li><a href="Unsecured-Business-Loan.php" class="BusiAdv <?= $page == 'Unsecured-Business-Loan.php' ? 'active':'' ?>">Unsecured Business Loan</a></li>
                                <li><a href="LAP.php" class="BusiSet <?= $page == 'LAP.php' ? 'active':'' ?>">Lap</a></li>
                                <li><a href="Home-Loan.php" class="Virtual <?= $page == 'Home-Loan.php' ? 'active':'' ?>">Home Loan</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" class="<?= $page == 'Working-Capital.php' || $page == 'RBI-FEMA-Cmpliance.php'|| $page == 'ROC-Compliance.php' || $page == 'SEBI-Compliance.php' ||$page == 'MCA.php' ? 'active':'' ?>"><span>Compliance</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                 
                                <li><a href="MCA.php" class="Acc <?= $page == 'MCA.php' ? 'active':'' ?>">Ministry Of Coprporate Affairs(MCA)</a></li>
                                <li><a href="SEBI-Compliance.php" class="TaxAdv <?= $page == 'SEBI-Compliance.php' ? 'active':'' ?>">SEBI Compliance</a></li>
                                <li><a href="ROC-Compliance.php" class="BusiAdv <?= $page == 'ROC-Compliance.php' ? 'active':'' ?>">ROC Compliance</a></li>
                                <li><a href="RBI-FEMA-Cmpliance.php" class="BusiSet <?= $page == 'RBI-FEMA-Cmpliance.php' ? 'active':'' ?>">RBI & FEMA Compliance</a></li>
                </ul>
              </li>
              <li><a href="EXIM.php" class="<?= $page == 'EXIM.php' ? 'active':'' ?>">EXIM</a></li>
              <li><a href="Registration.php"  class="<?= $page == 'Registration.php' ? 'active':'' ?>">Registration</a></li>
            </ul>
          </li>

          <!-- <li><a href="services.php">Industries We Serve</a></li> -->
          <li><a href="portfolio.php" class="<?= $page == 'portfolio.php' ? 'active':'' ?>">Industries WE Serve</a></li>
          <li><a href="career.php" class="<?= $page == 'career.php' ? 'active':'' ?>">Career</a></li>
          <li><a href="contact.php" class="<?= $page == 'contact.php' ? 'active':'' ?>">Contact Us</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="tel:9371151356" class="twitter"><i class="bu bi-phone"> +91 9371151356</i></a>
        <!-- <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a> -->
      </div>

    </div>
  </header><!-- End Header -->
