<?php
require("config.php");
$con = getMySQLConnection("Signup currently disabled, try again later");

if(isset($_POST["submit"])){
	
$con->query("INSERT INTO `users` (`username`, `password`, `email`, `firstname`, `lastname`) VALUES (
			'".$con->real_escape_string($_POST["uname"])."', ".
			"'".$con->real_escape_string($_POST["pass"])."', ".
			"'".$con->real_escape_string($_POST["email"])."', ".
			"'".$con->real_escape_string($_POST["name"])."', ".
			"'".$con->real_escape_string($_POST["lname"])."' ".
			");");
echo "Sign up successfull";
}else{
?>
<form action="register.php" method="POST">
First name: <input type="type" name="name" /><br/>
Last name: <input type="type" name="lname" /><br/>
Username: <input type="type" name="uname" /><br/>
Email: <input type="type" name="email" /><br/>
Confirm Email: <input type="type" name="email2" /><br/>
Password: <input type="password" name="pass" /><br />
Confirm Password: <input type="password" name="pass2" /><br />
<input type="submit" value="Register" name="submit" />

</form>
<?php
}
?>