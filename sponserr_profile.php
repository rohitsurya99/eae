<?php
session_start();
?>
<?php
		if(isset($_POST["submit"]))
			
		{
			
			include("connection.php");
			$fname=$_POST["fname"];
			$lname=$_POST["lname"];
			$bname=$_POST["bname"];
			$email=$_POST["email"];
			$_SESSION["email"]=$email;
			$contact=$_POST["contact"];
			$_SESSION["contact"]=$contact;
			$dob=$_POST["dob"];
			$password = $_POST["password"];
			$_SESSION["password"]=$password;
			
			$sel = "INSERT INTO `sponser` (`fname`, `lname`, `bname`, `email`, `contact`, `dob`, `password`)
			VALUES ('$fname', '$lname', '$bname', '$email', '$contact', '$dob', '$password')";
			$sell = mysqli_query($con,$sel);
			if($sell==1)
			{
				header("Location:sponserr_profilee.php");
			}
			else
			{
				echo "failed";
			}
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
	

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black section-title text-uppercase">Profile</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <form  method="POST" action="sponserr_profile.php">
			
						<label class="control-label " for="email">Name</label>
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
				
                  <input type="text" class="form-control" placeholder="First name" name="fname">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="lname">
                </div>
				
              </div>
			  <label class="control-label " for="email">Buissness name</label>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Buissness name" name="bname">
                </div>
              </div>
			<label class="control-label " for="email">Email Id</label>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="xyz@example.com" name="email">
                </div>
              </div>
			  <label class="control-label " for="email">Contact Number</label>
			  <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Contact Number"name="contact">
                </div>
              </div>
			  <label class="control-label " for="email">Date Of birth</label>
			   <div class="form-group row">
					<div class="col-md-12">
						<input type="date" class="form-control" placeholder="Date Of Birth" name="dob">
					</div>
				</div>
				<label class="control-label " for="email">enter password</label>
			   <div class="form-group row">
                <div class="col-md-12">
                  <input type="password" class="form-control" placeholder="Enter Password" name="password">
                </div>
				</div>
				<label class="control-label " for="email">confirm password</label>
			   <div class="form-group row">
                <div class="col-md-12">
                  <input type="password" class="form-control" placeholder="Confirm password" name="cpassword">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="NEXT" name="submit">
                </div>
              </div>
            </form>
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