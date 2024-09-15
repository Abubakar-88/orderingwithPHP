<?php

$servername = "srv995.hstgr.io";
$dBUsername = "u611910731_testingAutomat";
$dbPassword = "Automation123#@";
$dBName = "u611910731_automation";
$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);
if(!$conn){
	echo "Database Connection Failed";
}

?>
