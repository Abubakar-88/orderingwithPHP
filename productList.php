<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `productTbl`";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Product list |  Admin Panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<!--<li><a class="homeblack" href="addemp.php">Add Customer</a></li>-->
				<!--<li><a class="homeblack" href="viewcustomer.php">View Customer</a></li>-->
				
				<li><a class="homeblack" href="addProduct.php">Add Product</a></li>
				<li><a class="homered" href="productList.php">Product List</a></li>
				<li><a class="homeblack" href="alogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>
		<table>
			<tr>
				<th align = "center">Product ID</th>
				<!--<th align = "center">Cust. ID</th>-->
				 <th align = "center">Product Name</th>
			   	<th align = "center">Product Price</th>
				<!--<th align = "center">Delivery Date</th>-->
				<!--<th align = "center">Mark</th>-->
				<!--<th align = "center">Status</th>-->
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($productTbl = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$productTbl['id']."</td>";
				// 	echo "<td>".$productTbl['custId']."</td>";
					echo "<td>".$productTbl['prodName']."</td>";
					echo "<td>".$productTbl['prodPrice']."</td>";
				//	echo "<td>".$productTbl['deliveryDate']."</td>";
				//	echo "<td>".$productTbl['mark']."</td>";
				//	echo "<td>".$productTbl['status']."</td>";
				//	echo "<td><a href=\"mark.php?id=$customer[custId]&prodId=$customer[prodId]\">Mark</a>"; 
                   	echo "<td><a href=\"productEdit.php?id=$productTbl[id]\">Edit</a> | <a href=\"productdelete.php?id=$productTbl[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>"; 
				}


			?>

		</table>
		
	
</body>
</html>