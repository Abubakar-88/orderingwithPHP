<?php

require_once ('dbh.php');
	$id = (isset($_GET['id']) ? $_GET['id'] : '');

	$sql2 = "SELECT * FROM 'customer' where id = $id";
	 $result2 = mysqli_query($conn, $sql2);
	$sql3 = "SELECT * FROM 'customer' where id = $id";
	 $result3 = mysqli_query($conn, $sql3);
	 $customern = mysqli_fetch_array($result3);
     $custId = ($customern['id']);

 $prodId = $_POST['prodId'];
 $custId = $_POST['custId'];
 $ordDate= $_POST['ordDate'];
 
//$last_id = $conn->insert_id;

//$rank = mysqli_query($conn, "INSERT INTO `rank`(`cid`) VALUES ('$last_id')");


//$sql = "INSERT INTO 'order' (('prodName') VALUES ('$prodName')";

//$sql = "INSERT INTO `order`( `custId`,`ordDate`, `status`) VALUES ('$custId', '$ordDate', 'Due')";

//$result = mysqli_query($conn, $sql);

//$prodId= mysqli_insert_id('prodId');

$sql1 = mysqli_query($conn, "INSERT INTO `order`(`custId`,`prodId`,`ordDate`,`status`) VALUES ('$custId','$prodId','$ordDate','Due')");

$result = mysqli_query($conn, $sql1);


//$order = mysqli_fetch_all($resutl, MYSQLI_ASSOC);
 
 
 //console.log($order);
 
if(($sql1) === TRUE ){
    
   header("Location: ..//orderList.php?id=$custId");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('faild to Order')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    
    
    
}




?>