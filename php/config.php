<?php
$mysql_username = "root";
$mysql_password = "";
$mysql_host = "localhost";
$mysql_port = 3306;
$mysql_database = "carelesscourage";

function getMySQLConnection($ErrorMessage="Database Error"){
		global $mysql_username, $mysql_password, $mysql_host, $mysql_port, $mysql_database;
		$con = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database, $mysql_port);
		if($con->connect_errno){die($ErrorMessage);}
		return $con;
}
?>