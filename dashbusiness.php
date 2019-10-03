<?php
session_start();
?>
<?php
include("connection.php");
$email=$_SESSION['email'];
$password=$_SESSION['password'];

	$per = "SELECT * FROM `performer` WHERE `email`='$email' AND `password`='$password'";
	$perr = mysqli_query($con, $per);
	$perrr = mysqli_fetch_array($perr);
	$perrrr=$perrr['email'];
	if($perrrr==$email)
	{
		header("Location:businessprofile.php");
	}
	
	
	
	$pro = "SELECT * FROM `provider` WHERE `email`='$email' AND `password`='$password'";
	$proo = mysqli_query($con, $pro);
	$prooo = mysqli_fetch_array($proo);
	$proooo=$prooo['email'];
	if($proooo==$email)
	{
		header("Location:businessprofile.php");
	}
	
	
	
	$or = "SELECT * FROM `organiser` WHERE `email`='$email' AND `password`='$password'";
	$orr = mysqli_query($con, $or);
	$orrr = mysqli_fetch_array($orr);
	$orrrr=$orrr['email'];
	if($orrrr==$email)
	{
		header("Location:businessprofile.php");
	}
	
	
	$spo = "SELECT * FROM `sponser` WHERE `email`='$email' AND `password`='$password'";
	$spoo = mysqli_query($con, $spo);
	$spooo = mysqli_fetch_array($spoo);
	$spoooo=$spooo['email'];
	if($spoooo==$email)
	{
		header("Location:businessprofile.php");
	}
	
	
	$clu = "SELECT * FROM `club` WHERE `email`='$email' AND `password`='$password'";
	$cluu = mysqli_query($con, $clu);
	$cluuu = mysqli_fetch_array($cluu);
	$cluuuu=$cluuu['email'];
	if($cluuuu==$email)
	{
		header("Location:businessprofile.php");
	}
	
	
	$pub = "SELECT * FROM `pub` WHERE `email`='$email' AND `password`='$password'";
	$pubb = mysqli_query($con, $pub);
	$pubbb = mysqli_fetch_array($pubb);
	$pubbbb=$pubbb['email'];
	if($pubbbb==$email)
	{
		header("Location:businessprofile.php");
	}
	
	
	
	$pub1 = "SELECT * FROM `basic_user` WHERE `email`='$email' AND `password`='$password'";
	$pubb1 = mysqli_query($con, $pub1);
	$pubbb1 = mysqli_fetch_array($pubb1);
	$pubbbb1=$pubbb1['email'];
	if($pubbbb1==$email)
	{
		header("Location:business_userr.php");
	}
	
?>