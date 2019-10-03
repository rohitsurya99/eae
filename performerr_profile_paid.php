
<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>
<?php
session_start();
?>
<?php
		if(isset($_POST["submit"]))
		{
			$name=$_POST["name"];
			$_SESSION["name"]=$name;
			header("Location:payment/Paytm_Web_Sample_Kit_PHP-master/PaytmKit/pgRedirect.php");
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
   
      
<?php include("header1.php")?>



 
	

    <div class="site-section bg-light" id="contact-section" style="margin-top:-100px;">
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
                            <li>Description</li>
                          
                        </ul>
                        <a href="#" class="read btn btn-outline-warning">Paid 10<i class="fa fa-angle-right"></i></a>
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
                            <li>Description</li>
                           
                        </ul>
                        <a href="#" class="read btn btn-outline-warning">Paid 4500<i class="fa fa-angle-right"></i></a>
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
                            <li>Description</li>
                       
                        </ul>
                        <a href="#" class="read btn btn-outline-warning">Paid 30000<i class="fa fa-angle-right"></i></a>
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