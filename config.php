<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$host 		= "127.0.0.1:3306";
$user 		= "admin";
$pass 		= "adminspassword";
$db 		= "demo";
 
$link 		= mysqli_connect($host, $user, $pass, $db);


?>