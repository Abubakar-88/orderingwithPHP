<?php

$servername = "localhost:3306";
$dBUsername = "go2belal_micro2";
$dbPassword = "microtechna@";
$dBName = "go2belal_micro";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Databese Connection Failed";
}

?>