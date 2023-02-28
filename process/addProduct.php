<?php

require_once ('dbh.php');

$prodName = $_POST['prodName'];
//$custId = $_POST['custId'];
$prodPrice = $_POST['prodPrice'];
//$prodId = $_GET['prodId'];
$sql = "SELECT * from `productTbl`";

//$result = mysqli_query($conn, $query);

if($result->num_rows >0){
    while($rows = $result->fetch_assoc()){
        $prodId = $rows['prodId'];
    }
}

$sql = "INSERT INTO `productTbl`( `prodName`, `prodPrice`) VALUES ('$prodName' , '$prodPrice')";

//$sql1 = "INSERT INTO `order`(`custId`, 'prodId', `ordDate` , `status`) VALUES ('$custId' , '$prodId', $ordDate' , 'Due')";

$result = mysqli_query($conn, $sql);

//$result1 = mysqli_query($conn, $sql1);




if(($result) == 1){
    
    
    header("Location: ..//productList.php");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}




?>