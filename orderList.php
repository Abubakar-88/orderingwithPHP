<?php

require_once ('process/dbh.php');


	$id = (isset($_GET['id']) ? $_GET['id'] : '');

	$sql = "SELECT * FROM `order` where custId= $id";
	$result = mysqli_query($conn, $sql);
	
	$sql1 = "SELECT * FROM 'customer' where id = $id";
	 $result1 = mysqli_query($conn, $sql1);
	 $customern = mysqli_fetch_array($result1);
     $custId = ($customern['id']);

?>



<html>
<head>
	<title>Order List  |  Customer Panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="cloginwel.php?id=<?php echo $id?>">HOME</a></li>
				<!--<li><a class="homeblack" href="addemp.php">Add Customer</a></li>-->
				<!--<li><a class="homeblack" href="viewcustomer.php">View Customer</a></li>-->
				
				<li><a class="homeblack" href="productOrder.php?id=<?php echo $id?>">Order Product</a></li>
				<li><a class="homered" href="orderList.php?id=<?php echo $id?>">Order List</a></li>
				<li><a class="homeblack" href="clogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h1 id="orderList-title" style="text-align:center;">Order List</h1>
	<h2 style="text-align:right; font-size:20px;margin-right:35px;">Customer Id:<?php echo " $id"; ?> </h2>
	<div class="divider"></div>
		<table>
			<tr>
				<th align = "center">Order ID</th>
				<th align = "center">Cust. ID</th>
				 <th align = "center">Product ID</th>
			   	<!--<th align = "center">Product Price</th>-->
			   	<th align = "center">Order Date</th>
				<th align = "center">Delivery Date</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($orderTbl = mysqli_fetch_assoc($result)) {
				    if( $id !=null){
					echo "<tr>";
					echo "<td>".$orderTbl['ordId']."</td>";
			    	echo "<td>".$orderTbl['custId']."</td>";
					echo "<td>".$orderTbl['prodId']."</td>";
					echo "<td>".$orderTbl['ordDate']."</td>";
			    	echo "<td>".$orderTbl['deliveryDate']."</td>";
			    	echo "<td>".$orderTbl['status']."</td>";
			    	
				   echo "<td><a href=\"orderSubmit.php?ordId=$orderTbl[ordId]&id=$orderTbl[custId]\">Confirm</a>"; 
				    
				}
			}
          
			?>

		</table>
		
	
</body>
</html>