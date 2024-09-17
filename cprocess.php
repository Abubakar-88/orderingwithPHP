<?php
session_start();
require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];
$error ="Invalid username or password!";

$sql = "SELECT * from `customer` WHERE email = '$email' AND password = '$password'";
$sqlid = "SELECT id from `customer` WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$custid = "";
if(mysqli_num_rows($result) == 1){
	
	$customer = mysqli_fetch_array($id);
	$custid = ($customer['id']);
	$_SESSION["email"] = $email;

	//echo ("logged in");
	//echo ("$empid");
	
	header("Location: ..//cloginwel.php?id=$custid");
}

else{
       $_SESSION["error"] = $error; 
        header("Location: ..//clogin.php");
}
?>
