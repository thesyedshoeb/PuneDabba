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
<!--	<link rel="stylesheet" href="assets/css/style1.css">  -->
    <link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>




 

<!-- form area start -->
<!-- Table Area Starts -->

     <section class="table-area section-padding"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3>Book <span>your</span> table</h3>
                        <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
<div class="row">
                <div class="col-lg-8 offset-lg-2">
                <form method="post" action="functions.php">
<p style="color:red;">
<?php
if(isset($msg))
{
	echo $msg;
}
?></p>
<div class="row">
	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>
                            </div>
		
		<input type="text" name="username" value="" placeholder="Enter Your name.." required	>
	</div>
	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-cutlery"  aria-hidden="true"></i></span>
                            </div>
		
		<input type="text" name="cateringname" value="" placeholder="Enter Catering Name.." required>
	</div>
	

	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-building" aria-hidden="true"></i></span>
                            </div>
		
		<input type="text" name="address" value="" placeholder="Enter Address.." required>
	</div>
	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                            </div>
		
		<input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Enter mobile number" required>
	</div>
	
	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            </div>
		
		<input type="email" name="email" value="" placeholder="Enter Email.." required>
	</div>
	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
                            </div>
		
		<input type="password" name="password_1" placeholder="Enter password.." required>
	</div>
	<div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-puzzle-piece" aria-hidden="true"></i></span>
                            </div>
		
		<input type="password" name="password_2" placeholder="confirm password.." required>
	</div>
		
		
		<!-- php fetch data from server-->
	<div class="input-group mb-3">
	<div class="input-group-prepend">
                              <span class="input-group-text"><i class="fa fa-building" aria-hidden="true"></i></span>
                            </div>
      <select name="lo" id="" required class="form-control" style="width:150 px;"  ></div>
	  <option value="" disabled selected>Choose your Address</option>	
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
	<div class="input-group mb-3">
							
		<label>Category</label>
		<input type="radio" name="cat" value="veg" checked="check"   >Veg
        <input type="radio" name="cat" value="nonveg">Non-Veg
        <input type="radio" name="cat" value="both"> Both

	</div>
	
	
	<div class="table-btn text-center">
		<button type="submit" class="btn btn-primary template-btn template-btn2 mt-4" name="register_btn"  >register</button>
		</div>
    <div class="table-btn text-center">
                            <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
                        </div>

	
</form>
             </div>
            </div>
        </div>
    </section>
			
    <!-- Table Area End -->
<!--form area end -->


</body>
</html>