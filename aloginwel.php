<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,  points FROM employee, rank WHERE rank.eid = employee.id order by rank.points desc";
$sql1= "SELECT * from `customer` WHERE customer.id = id";
$result = mysqli_query($conn, $sql);
$result1 =mysqli_query($conn, $sql1);
?>


<html>
<head>
	<title>Admin Panel | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
</head>
<body>

</div>
	<header>


		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homered" href="aloginwel.php">HOME</a></li>
				
               
				<!--<li><a class="dropdown2" >-->
				<!-- <button onclick="myFunction()" class="dropbtn2">Employee</button>-->
    <!--              <div id="myDropdown2" class="dropdown-content2">-->
    <!--                <a href="addemp.php">Add Employee</a>-->
    <!--                <a href="viewemp.php">View Employee</a>-->
    <!--                <a href="assign.php">Assign Project</a>-->
    <!--                <a href="assignproject.php">Project Status</a>-->
    <!--                <a href="salaryemp.php">Salary Table</a>-->
    <!--                <a href="empleave.php">Employee Leave</a>-->
    <!--              </div>-->
				
				<!--</li>-->
				
				<!--	<li><a class="dropdown1" >-->
				<!-- <button onclick="myFunction()" class="dropbtn1">Customer</button>-->
    <!--              <div id="myDropdown1" class="dropdown-content1">-->
    <!--                <a href="addcustomer.php">Add Customer</a>-->
    <!--                <a href="viewcustomer.php">View Customer</a>-->
    <!--                <a href="assign.php">Add Product</a>-->
    <!--              </div>-->
				
				<!--</li>-->
				
				
			      <li><a class="homeblack" href="addemp.php">Employee</a></li>
			      <li><a class="homeblack" href="addcustomer.php">Customer</a></li>
			      <li><a class="homeblack" href="addProduct.php">Add Product</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Employee Leaderboard </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Seq.</th>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Points</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$seq."</td>";
					echo "<td>".$employee['id']."</td>";
					
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['points']."</td>";
					
					$seq+=1;
				}


			?>

		</table>

		<div class="p-t-20">
			<button class="btn btn--radius btn--green" type="submit" style="float: right; margin-right: 60px"><a href="reset.php" style="text-decoration: none; color: white"> Reset Points</button>
		</div>
		
		
<style>
    div#divimg h2 {
    text-align: center;
    visibility: visible;
    box-sizing: border-box;
    display: vi;
    color: black;
}

div#divimg {
    margin-top: 54px;
    margin-bottom:50px;
}
    
    
    
</style>
	<div id="divimg">
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; text-align: center;">Customer board </h2>
    	<table>

			<tr bgcolor="#000">
				<th align = "center">Cust. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Order</th>
				

			</tr>

			

			<?php
				$seq = 1;
				while ($customer = mysqli_fetch_assoc($result1)) {
					echo "<tr>";
					echo "<td>".$customer['id']."</td>";
					
					echo "<td>".$customer['firstName']." ".$customer['lastName']."</td>";
					
					echo "<td>".$customer['product']."</td>";
					
					$seq+=1;
				}


			?>

		</table>
		
	</div>
</body>
</html>