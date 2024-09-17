<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Log In | MicroTech NA</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
	<header>
		<nav>
			<h1>MicroTech NA</h1>
			<ul id="navli">
				<li><a class="homeblack" href="index.html">HOME</a></li>
				<li><a class="homered" href="clogin.php">Customer Login</a></li>
				<li><a class="homeblack" href="elogin.php">Employee Login</a></li>
				<li><a class="homeblack" href="alogin.html">Admin Login</a></li>
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="loginbox">
    <img src="assets/avatar.png" class="avatar">
        <h1>Customer Login </h1>
        <form action="process/cprocess.php" method="POST">
            <p>User Id</p>
            <input type="text" name="mailuid" placeholder="Enter Email Address" required="required">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
            <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span id='error-msg' style='color:red;'>$error</span>";
                    }
                ?> 
        </form>
        
    </div>
			
			
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>
