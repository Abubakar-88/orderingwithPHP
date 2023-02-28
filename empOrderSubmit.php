<?php

require_once ('process/dbh.php');
//$id = (isset($_GET['id']) ? $_GET['id'] : '');
$ordId = $_GET['ordId'];
$id = $_GET['id'];
$date = date('Y-m-d');
//echo "$date";
$sql = "UPDATE `order` SET `deliveryDate`='$date',`status`='Confirmed' WHERE ordId = '$ordId';";
$result = mysqli_query($conn , $sql);
header("Location: empOrderList.php?id=$id");
?>