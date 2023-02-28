<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `customer` WHERE customer.id = id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Customer |  Admin Panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				<li><a class="homeblack" href="addcustomer.php">Add Customer</a></li>
				<li><a class="homered" href="viewcustomer.php">View Customer</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">Cust. ID</th>
				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">Address</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($customer = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$customer['id']."</td>";
					echo "<td><img src='process/".$customer['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$customer['firstName']." ".$customer['lastName']."</td>";
					
					echo "<td>".$customer['email']."</td>";
					echo "<td>".$customer['birthday']."</td>";
					echo "<td>".$customer['gender']."</td>";
					echo "<td>".$customer['contact']."</td>";
					echo "<td>".$customer['address']."</td>";

					echo "<td><a href=\"custedit.php?id=$customer[id]\">Edit</a> | <a href=\"custdelete.php?id=$customer[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>