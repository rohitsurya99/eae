<?php
session_start();
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
   
      
    <?php
   include("header3.php");
   ?>
   <?php
   include("connection.php");
   $email=$_SESSION["email"];
   $password=$_SESSION["password"];
   
   $sel="SELECT * FROM `perfomerdash` WHERE `reg_email`='$email' AND `password`='$password'";
   $sell=mysqli_query($con,$sel);
   $selll=mysqli_num_rows($sell);
   if($selll==1)
   {
   ?>
    <div class="site-section" style="margin-top:-100px;">
	 
      <div class="container">
	
        <div class="row">
		
          <div class="col-md-6 col-lg-6 mb-4 text-center" >
		  <div class="container" style="border:2px solid gray;">
            <span class=" d-block mb-3 display-3 text-secondary"><a href=""><img src="images/shows.png"  height="110px"></a></span>
            <h3 class="text-primary h4 mb-2"><a href="">Shows</a></h3>
            <p>Shows hows Shows Shows ShowsSho wsShow sSho ws Shows</p>
          </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 text-center" >
		    <div class="container" style="border:2px solid gray;">
            <span class=" d-block mb-3 display-3 text-secondary"><a href=""><img src="images/f.png"  height="110px"></a></a></span>
            <h3 class="text-primary h4 mb-2"><a href="">Festivals</a></h3>
            <p>Festivals tivalsFes tivalsF estivalsFe stivalsFesti Festivals</p>
          </div>
          </div>
            
        </div>
      </div>
    </div>
<?php
   }
   else
   {
?>
    <div class="site-section" style="margin-top:-100px;">
	 <center>
      <div class="container">
  <h2 style="">Step 2-3</h2>
  <form class="form-horizontal" method="POST" action="home.php">
   <div class="form-group">
      <div class="col-sm-4"><center>
        <img src="img" style="height:150px; border:1px solid gray; border-radius:100%;"></center>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Performer Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="email" placeholder="Enter Performer Name" name="email">
      </div>
    </div>
	  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact Timing</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter Country" name="password">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contact Number</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter Contact Number" name="password">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email id</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter Email id" name="password">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Website</label>
      <div class="col-sm-4">          
        <input type="text" class="form-control" id="pwd" placeholder="www.example.xyz" name="password">
      </div>
    </div>
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-lg btn-success">Next</button>
      </div>
    </div>
	
  </form>
</div>
</center>
    </div>
	<?php
   }
	?>

   
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