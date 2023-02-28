<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `productTbl`";

//echo "$sql";
$result = mysqli_query($conn, $sql);



	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	
	 $sql1 = "SELECT * FROM `customer` where id = $id";
	 $result1 = mysqli_query($conn, $sql1);
	 $customern = mysqli_fetch_array($result1);
	 $custName = ($customern['firstName']);
     $custId = ($customern['id']);
     
	



//echo "$sql";
//$result1 = mysqli_query($conn, $sql);

?>



<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Order Product | Customer Panel</title>

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
                <li><a class="homeblack" href="cloginwel.php?id=<?php echo $id?>">HOME</a></li>
                <li><a class="homered" href="productOrder.php?id=<?php echo $id?>">Order Product</a></li>
                <li><a class="homeblack" href="orderList.php?id=<?php echo $id?>">Order List</a></li>
                <li><a class="homeblack" href="clogin.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <h2 style="text-align:right; font-size:20px;margin-right:35px;margin-bottom:20px;margin-top:20px;">Customer Id:<?php echo " $custId"; ?> </h2>
    
    <div class="divider"></div>


    <?php     

$options = "";

while($rows = mysqli_fetch_array($result))
{
    $options = $options."<option value='$rows[id]'>$rows[prodName]</option>";
}

?>
   
<style>
    
   select {
    width: 495px;
    border-bottom: 2px solid #c7c0c0;
    border-right: none;
    border-left: none;
    border-top: none;
    color: #73716e;
    margin-bottom: 30px;
} 
  *:focus {
    outline: none;
}  
    
</style>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Order Product</h2>
                    <form action="process/productOrderp.php" method="POST" enctype="multipart/form-data">
  
                         <!--<div class="input-group">-->
                         <!--   <input class="input--style-1" type="text" placeholder="product id" name="prodId" required="required">-->
                         <!-- </div>-->
                          
                        <p>Customer ID</p>
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="custId" value="<?php echo $id; ?>" readonly>
                        </div>
                        
                        <select name="prodId">
                             echo "<option selected>Choose Product Name</option>";
                               <?php echo $options;?>
                           </select>
                                      
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder=" Type order date" name="ordDate" required="required">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Order Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
