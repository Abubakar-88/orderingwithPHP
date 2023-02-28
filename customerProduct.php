<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `product` where custId = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>



<html>
<head>
	<title>Customer Panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="cloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="custMyProfile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homered" href="customerProduct.php?id=<?php echo $id?>"">My Product</a></li>
				<li><a class="homeblack" href="clogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">


		<table>
			<tr>

				<th align = "center">Product ID</th>
				<th align = "center">Product Name</th>
				<th align = "center">Order Date</th>
				<th align = "center">Delivery Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
			</tr>

			<?php
				while ($customer = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>".$customer['prodId']."</td>";
					echo "<td>".$customer['prodName']."</td>";
					echo "<td>".$customer['ordDate']."</td>";
					echo "<td>".$customer['deliveryDate']."</td>";
					echo "<td>".$customer['mark']."</td>";
					echo "<td>".$customer['status']."</td>";
					

					 echo "<td><a href=\"prodSubmit.php?prodId=$customer[prodId]&id=$customer[custId]\">Confirm</a>";

				}


			?>

		</table>

		</body>
</html>