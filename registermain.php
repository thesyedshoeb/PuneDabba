<?php
include 'connection.php';
include 'functions.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	    
 <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Pune Dabba</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">

    <!-- CSS Files -->
	
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="assets/css/style1.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>




 <!-- Header Area Starts --> 
	<header class="header-area bg-warning">
        <div class="container ">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
					
                        
						
						<img src="img/logo2.png"  style="width:50px;height:50px;">
												<img src="img/logo3.png"  style="width:100px;height:40px;">  


						
						
						
						</a>
                    </div>
					
                </div>
               <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li class="active"><a href="index.php">home</a></li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="register.php" target="_blank">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header> 
    <!-- Header Area End -->


<!-- form area start -->

<section class="food-area section-padding">
        <div class="container">
				
            
                
<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="functions.php">

<p style="color:red;">
<?php
if(isset($msg))
{
	echo $msg;
}
?></p>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="" placeholder="Enter Your name.." required	>
	</div>
	<div class="input-group">
		<label>Catering Name</label>
		<input type="text" name="cateringname" value="" placeholder="Enter Catering Name.." required>
	</div>
	

	<div class="input-group">
		<label>Address</label>
		<input type="text" name="address" value="" placeholder="Enter Address.." required>
	</div>
	<div class="input-group">
		<label>Mobile Number</label>
		<input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Enter mobile number" required>
	</div>
	
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="" placeholder="Enter Email.." required>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" placeholder="Enter password.." required>
	</div>
	<div class="input-group">
		<label>confirm Password</label>
		<input type="password" name="password_2" placeholder="confirm password.." required>
	</div>
	
	<div >
		<label>Category</label>
		<input type="radio" name="cat" value="veg" checked="check" >Veg
        <input type="radio" name="cat" value="nonveg">Non-Veg
        <input type="radio" name="cat" value="both"> Both

	</div>
		<!-- php fetch data from server-->
	<div class="input-group">
	
	<label>Location</label>
		
	<select name="lo" id="" required>
       <?php
		$query="SELECT * FROM `table 1`";
		$result=mysqli_query($con,$query);
		while($arr=mysqli_fetch_array($result))
		{
	   ?>
		<option><?php echo $arr['location'];?></option>
<?php   } ?>
    </select>
	</div>
	<!-- data Fetch-->
	
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
 

	
</form>
 </div>
    </section>
<!--form area end -->
</body>
</html>