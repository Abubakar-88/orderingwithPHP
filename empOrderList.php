<?php

require_once ('process/dbh.php');



	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `order` where empId=$id";
	$result = mysqli_query($conn, $sql);
	
	
	$sql1 = "SELECT * FROM `employee` where id = $id";
	 $result1 = mysqli_query($conn, $sql1);
	 $employeen = mysqli_fetch_array($result1);
     $empId = ($employeen['id']);
?>



<html>
<head>
	<title>Order List |  Employee panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>">HOME</a></li>
			
				<li><a class="homeblack" href="empProductOrder.php?id=<?php echo $id?>">Order Product</a></li>
				<li><a class="homered" href="empOrderList.php?id=<?php echo $id ?>">Order List</a></li>
				<li><a class="homeblack" href="elogin.php">Log Out</a></li>
			</ul>
		</nav>
	</header>
	<h2 style="text-align:right; font-size:20px;margin-right:35px;">Employee Id:<?php echo " $empId"; ?> </h2>
	<div class="divider"></div>
		<table>
			<tr>
				<th align = "center">Order ID</th>
				<th align = "center">Employee ID</th>
				 <th align = "center">Product ID</th>
			   	<!--<th align = "center">Product Price</th>-->
			   	<th align = "center">Order Date</th>
				<th align = "center">Delivery Date</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
			
		
			
				while ($orderTbl = mysqli_fetch_assoc($result)) {
					if($id != NULL){
					echo "<tr>";
					echo "<td>".$orderTbl['ordId']."</td>";
			    	echo "<td>".$orderTbl['empId']."</td>";
					echo "<td>".$orderTbl['prodId']."</td>";
					echo "<td>".$orderTbl['ordDate']."</td>";
			    	echo "<td>".$orderTbl['deliveryDate']."</td>";
			    	echo "<td>".$orderTbl['status']."</td>";
			    	
				   echo "<td><a href=\"empOrderSubmit.php?ordId=$orderTbl[ordId]&id=$orderTbl[empId]\">Confirm</a>"; 
				    
				}
			}

			?>

		</table>
		
	
</body>
</html>