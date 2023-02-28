<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	 $sql1 = "SELECT * FROM `customer` where id = $id";
	 $result1 = mysqli_query($conn, $sql1);
	 $customern = mysqli_fetch_array($result1);
	 $custName = ($customern['firstName']);
     $custId = ($customern['id']);
     
	$sql = "SELECT id, firstName, lastName";
//	$sql1 = "SELECT * FROM `productTbl` where id = '$id'";




//echo "$sql";
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);
?>



<html>
<head>
	<title>Customer Panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat" rel="stylesheet">
</head>
<body>
	
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homered" href="cloginwel.php?id=<?php echo $id?>">HOME</a></li>
				<li><a class="homeblack" href="custMyProfile.php?id=<?php echo $id?>">My Profile</a></li>
				<li><a class="homeblack" href="productOrder.php?id=<?php echo $id?>">Order Product</a></li>
				<li><a class="homeblack" href="orderList.php?id=<?php echo $id?>"> Order List </a></li>
				<li><a class="homeblack" href="clogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
	<div>
	       <h2 style="text-align:right; font-size:20px;margin-right:35px;">Customer Id:<?php echo " $custId"; ?> </h2>
		 <h2 style="text-align:center; font-size:30px;">Welcome <?php echo "$custName"; ?></h2>
		 
		 
		 <h3 style="text-align:center;">We value our customers more than anything, and your satisfaction is <br>what we aim for! Welcome to you! Thank you for visiting us!</h3>
		 
		 
		 
		 <!--<img style="text-align:center;" src="assets/warm-welcome-message.jpg" class="front-image">-->
		 
		 <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6012822677236109"
     crossorigin="anonymous"></script>

  <!--  	<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Product Order</h2>-->
    	

  <!--  	<table>-->

		<!--	<tr>-->
		<!--	     <th align = "center">Product ID</th>-->
		<!--		<th align = "center">Product Name</th>-->
		<!--		<th align = "center">Order Date</th>-->
				
		<!--	</tr>-->

			

		<!--//	<//?//php-->
		<!--	//	while ($customer1 = mysqli_fetch_assoc($result1)) {-->
		<!--	//		echo "<tr>";-->
		<!--	//		echo "<td>".$customer1['prodId']."</td>";-->
		<!--		//	echo "<td>".$customer1['prodName']."</td>";-->
					
		<!--		//	echo "<td>".$customer1['ordDate']."</td>";-->

		<!--		}-->


		<!--//	?>-->

		<!--</table>-->




   
<br>
<br>
<br>
<br>
<br>







	</div>


		</h2>


		
		
	</div>
</body>
</html>