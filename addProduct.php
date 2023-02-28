




<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Add Product | Admin Panel</title>

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
                <li><a class="homered" href="addProduct.php">Add Product</a></li>
                <li><a class="homeblack" href="productList.php">Product List</a></li>
                <li><a class="homeblack" href="alogin.html">Log Out</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>
<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `customer`WHERE customer.id = id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>

    <?php     

$options = "";

while($customer = mysqli_fetch_array($result))
{
    $options = $options."<option value='$customer[id]'>$customer[firstName]$customer[lastName]</option>";
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
                    <h2 class="title">Add Product</h2>
                    <form action="process/addProduct.php" method="POST" enctype="multipart/form-data">
  
                   
                                            
                          <!--<select name="custId">-->
                          <!--    echo "<option selected>Choose Customer Name</option>";-->
                               <?php// echo $options;?>
                          <!--  </select>-->
                                            
                       
                             
                        <!--//     $select1 = $_POST['customer'];-->
                        <!--//     if (!strpos($select1)) {-->
                        <!--//         $sql3="$result(custId) VALUES ($custId, $select1)";-->
                        <!--//         mysql_query($sql3);-->
                        <!--//         }-->
                        <!--//     if(customer==$option){-->
                        <!--//         echo($customer['id']);-->
                        <!--//     }-->
                        
                             
                              <!--$select1 = $_POST['custId'];-->
                              <!--if(!empty($select1)){-->
                              <!--echo<button>".$customer['lastName']."</button> -->
                              <!--}else{-->
                                  
                              <!--}-->
                              
                              
                              
                              <!--?>-->
                        

                        <!-- <div class="input-group">-->
                        <!--    <input class="input--style-1" type="text" placeholder="Customer ID" name="custId" required="required">-->
                        <!--</div>-->

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Product Name" name="prodName" required="required">
                        </div>
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="currency" placeholder="Price" name="prodPrice" required="required">
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">add Product</button>
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
