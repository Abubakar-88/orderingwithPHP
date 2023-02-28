<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `productTbl` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$prodName = mysqli_real_escape_string($conn, $_POST['prodName']);
	$prodPrice = mysqli_real_escape_string($conn, $_POST['prodPrice']);





	// $result = mysqli_query($conn, "UPDATE `customer` SET `firstName`='$firstname',`lastName`='$lastname',`email`='$email',`password`='$email',`gender`='$gender',`contact`='$contact',`address`='$address', WHERE id=$id");


$result = mysqli_query($conn, "UPDATE `productTbl` SET `prodName`='$prodName',`prodPrice`='$prodPrice' WHERE id=$id");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='productList.php';
    </SCRIPT>");


	
}
?>




<?php
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	$sql = "SELECT * from `productTbl` WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	if($result){
	while($res = mysqli_fetch_assoc($result)){
	$prodName = $res['prodName'];
	$prodPrice = $res['prodPrice'];
// 	$email = $res['email'];
// 	$contact = $res['contact'];
// 	$address = $res['address'];
// 	$gender = $res['gender'];
// 	$birthday = $res['birthday'];
	
}
}

?>

<html>
<head>
	<title>View Customer |  Admin Panel | MicroTech NA</title>
	<!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addcustomer.php">Add Product</a></li>
				<li><a class="homered" href="productList.php">Product List</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
	

		<!-- <form id = "registration" action="edit.php" method="POST"> -->
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Customer Info</h2>
                    <form id = "registration" action="productEdit.php" method="POST">


               <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Product Name" name="prodName" value="<?php echo $prodName;?>">
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="currency" placeholder="Price" name="prodPrice" value="<?php echo $prodPrice;?>">
                                   
                                </div>
                            </div>
                            
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
