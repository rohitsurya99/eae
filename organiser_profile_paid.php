<?php
session_start();
?>
<?php
		if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$_SESSION["name"]=$name;
			header("Location:performer_profile_paid.php");
		}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E.A.E Frolics</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
      
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">
          
            <div class="site-logo">
			<center>
			<img src="logo.png" height="120px">
               </center>
            </div>
            <div class="site-logo">
			<center>
			
              <h1 style="color:#FECB2E; font-size:30px; " >E.A.E Frolics</h1>
              <span style="font-size:10px; font-family: arial;" class="heading">Break Free To The Entertainment</span>
			  </center>
            </div>
           
              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="profile.php" class="nav-link active">Home</a></li>
                  <li><a href="aboutt.php" class="nav-link ">About</a></li>
                   <li><a href="termss.php" class="nav-link">Terms & Condition</a></li>
                  <li><a href="contactt.php" class="nav-link">Contact</a></li>
                  <li><a href="promote.php" class="nav-link">Promotion</a></li>
                  <li><a href="business_user.php" class="btn btn-sm btn-warning"> &nbsp; Business Profile  &nbsp;</a></li>
                 </ul>
              </nav>
          
            

          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
    <!-- heading -->  
    </header>



  <div class="site-section bg-image overlay" style="background-image: url('logo.png');" id="donate-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-5 text-center">
            <h2 class="text-white mb-4">Paid Oraganiser Profile</h2>
          </div>
        </div>
      </div>
    </div>
	
	

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black section-title text-uppercase">Select Plan</h2>
          </div>
        </div>
		
		<div class="demo">
        <div class="container">
            <div class="row text-center">
          
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 p-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">Monthly</h3>
                            <span class="subtitle">Lorem ipsum dolor sit amet</span>
                            <div class="price-value">10
                                <span class="currency">₹</span>
                                <span class="month">/month</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            <li>50GB Disk Space</li>
                            <li>50 Email Accounts</li>
                            <li>50GB Monthly Bandwidth</li>
                            <li>10 Subdomains</li>
                            <li>15 Domains</li>
                        </ul>
                        <a href="#" class="read btn btn-outline-warning">Get Offer<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 p-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">Quaterly</h3>
                            <span class="subtitle">Lorem ipsum dolor sit amet</span>
                            <div class="price-value">4500
                                <span class="currency">₹</span>
                                <span class="month">/quater</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            <li>60GB Disk Space</li>
                            <li>60 Email Accounts</li>
                            <li>60GB Monthly Bandwidth</li>
                            <li>15 Subdomains</li>
                            <li>20 Domains</li>
                        </ul>
                        <a href="#" class="read btn btn-outline-warning">Get Offer<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 p-5">
                    <div class="pricingTable">
                        <div class="pricingTable-header">
                            <h3 class="heading">Yearly</h3>
                            <span class="subtitle">Lorem ipsum dolor sit amet</span>
                            <div class="price-value">30000
                                <span class="currency">₹</span>
                                <span class="year">/year</span>
                            </div>
                        </div>
                        <ul class="pricing-content">
                            <li>70GB Disk Space</li>
                            <li>70 Email Accounts</li>
                            <li>70GB Monthly Bandwidth</li>
                            <li>20 Subdomains</li>
                            <li>25 Domains</li>
                        </ul>
                        <a href="#" class="read btn btn-outline-warning">Get Offer<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
        
    </div>
    </div>


   
   <?php include("footer.php");?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>