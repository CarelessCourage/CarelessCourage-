<?php
require("config.php");

if(isset($_POST["submit"])){ 
echo "win win win";
}else{

?>
<form action="register.php" method="POST">
First name: <input type="type" name="name" /><br/>
Last name: <input type="type" name="lname" /><br/>
Username: <input type="type" name="uname" /><br/>
Email: <input type="type" name="email" /><br/>
Confirm Email: <input type="type" name="email2" /><br/>
Password: <input type="password" name="passl" /><br />
Confirm Password: <input type="password" name="pass2" /><br />
<input type="submit" value="Register" name="submit" />

</form>

<?php

}

?>