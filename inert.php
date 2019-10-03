<?php
if(isset($_POST["submit"]))
include("connection.php");




?>
<form method="POST" action="insert.php">
<input type="text" name="name" placeholder="name">
<input type="number" name="name" placeholder="contact no">
<input type="email" name="name" placeholder="Email">
<input type="date" name="name" >
<select type="text" name="gender">
	<option>Male</option>
	<option>Female</option>
</select>
<input type="password" name="password" placeholder="password">
<input type="submit" name="submit" value="Sign Up">

</form>