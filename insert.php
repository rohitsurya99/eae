<?php
if(isset($_POST["submit"]))
{
include("connection.php");
$name=$_POST["name"];
$conatct=$_POST["contact"];
$email=$_POST["email"];
$date=$_POST["date"];
$gender=$_POST["gender"];
$password=$_POST["password"];

$ins="INSERT INTO `business_user` (`name`, `contact`, `email`, `dob`, `gender`, `pa`)
 VALUES ('$name', '$conatct', '$email', '$date', '$gender', '$password')";

$insert=mysqli_query($con,$ins);
if($insert==1)
{
	echo "profile successful";
}
else
{
	echo "failed";
}

}
?>
<form method="POST" action="insert.php">
<input type="text" name="name" placeholder="name">
<input type="number" name="contact" placeholder="contact no">
<input type="email" name="email" placeholder="Email">
<input type="date" name="date" >
<select type="text" name="gender">
	<option>Male</option>
	<option>Female</option>
</select>
<input type="password" name="password" placeholder="password">
<input type="submit" name="submit" value="Sign Up">

</form>