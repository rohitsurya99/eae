<?php
	session_start();
?>
<?php
	include("login.php");
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
   
      
<?php include("header.php")?>
	
	<div class="row" style="background:#e5e3db;">
    <div class="owl-carousel slide-one-item col-lg-6">
	
      <a href="#"><img src="images/hero_1.jpg" alt="Image" class="img-fluid"></a>
      <a href="#"><img src="images/hero_2.jpg" alt="Image" class="img-fluid"></a>
    </div>
    
	
    <div class="col-lg-6" >
	</br>
	
	
<div class="container">
  <h1 style="">Login</h1>
  <form class="form-horizontal" method="POST" action="home.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-lg btn-success">Login</button>
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <a href="forgot.php" class="btn btn-lg btn-warning">Forgot Password ?</a>
        <a href="#create" class="btn btn-lg btn-warning">Create Account</a>
      </div>
    </div>
	
  </form>
</div>
	</div>
	</div>

<div id="about">
  <?php
  include("about.php");
  ?>
  </div>
 

  
 <div id="contact">
  <?php
  include("contact.php");
  ?>
  </div>
    
 <div id="create">
  <?php
  include("create.php");
  ?>
  </div>

<?php 
include("footer.php");
?>
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