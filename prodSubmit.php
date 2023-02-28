<?php

require_once ('process/dbh.php');
//$id = (isset($_GET['id']) ? $_GET['id'] : '');
$prodId = $_GET['prodId'];
$id = $_GET['id'];
$date = date('Y-m-d');
//echo "$date";
$sql = "UPDATE `product` SET `deliveryDate`='$date',`status`='Confirmed' WHERE prodId = '$prodId';";
$result = mysqli_query($conn , $sql);
header("Location: customerProduct.php?id=$id");
?>