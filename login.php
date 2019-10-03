
<?php
if(isset($_POST['submit']))
{
	include("connection.php");
	$email = $_POST["email"];
	$_SESSION['email'] = $email;
	$password = $_POST["password"];
	$_SESSION['password'] = $password;
	
	$per = "SELECT * FROM `performer` WHERE `email`='$email' AND `password`='$password'";
	$perr = mysqli_query($con, $per);
	$perrr = mysqli_num_rows($perr);
	
	$pro = "SELECT * FROM `provider` WHERE `email`='$email' AND `password`='$password'";
	$proo = mysqli_query($con, $pro);
	$prooo = mysqli_num_rows($proo);
	
	$or = "SELECT * FROM `organiser` WHERE `email`='$email' AND `password`='$password'";
	$orr = mysqli_query($con, $or);
	$orrr = mysqli_num_rows($orr);
	
	$spo = "SELECT * FROM `sponser` WHERE `email`='$email' AND `password`='$password'";
	$spoo = mysqli_query($con, $spo);
	$spooo = mysqli_num_rows($spoo);
	
	$clu = "SELECT * FROM `club` WHERE `email`='$email' AND `password`='$password'";
	$cluu = mysqli_query($con, $clu);
	$cluuu = mysqli_num_rows($cluu);
	
	$pub = "SELECT * FROM `pub` WHERE `email`='$email' AND `password`='$password'";
	$pubb = mysqli_query($con, $pub);
	$pubbb = mysqli_num_rows($pubb);
	
	$pub1 = "SELECT * FROM `basic_user` WHERE `email`='$email' AND `password`='$password'";
	$pubb1 = mysqli_query($con, $pub1);
	$pubbb1 = mysqli_num_rows($pubb1);
	
	if($perrr==1 || $prooo==1 || $spooo==1 || $orrr==1 || $cluuu==1 || $pubbb==1)
	{
		header("Location:profile.php");
	}
	if($pubbb1==1)
	{
		header("Location:profile.php");
	}
	else
	{
		echo "login failed";
	}
}
	
?>