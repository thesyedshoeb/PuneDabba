<?php


//server connection
$server="localhost";
$user_con="root";
$pass_con="";
$dbname="multi_login";
$con=mysqli_connect($server,$user_con,$pass_con,$dbname);
if(!$con)
{
die("Failed to connect db".mysqli_connect_error());
}

if(isset($_POST['register_btn']))
{
  $name=$_POST['username'];
  $cname=$_POST['cateringname'];
  $add=$_POST['address'];
  $email=$_POST['email'];
  $ps1=$_POST['password_1'];
  $ps2=$_POST['password_2'];
  $ct=$_POST['cat'];
  $loc=$_POST['lo'];
  $phone=$_POST['phone'];
  
  //validation
 global $msg;	
if(empty($name)){$msg="please enter user name";}
else if (empty($cname)){$msg="please enter cantring name";}
else if (empty($add)){$msg="please enter address";}
else if(empty($phone)){$msg="please enter mobile number";}
else if (empty($email)){$msg="please enter email";}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){$msg="enter valid email";}
else if (empty($ps1)){$msg="please enter password";}
else if (empty($ps2)){$msg="please confirm password";}
else if ($ps1!= $ps2){$msg="password not matched";}

 //insert data
 
 if(count($msg)==0)
 {//count brace

    if(($ct)=="veg")
	{
   $query= "INSERT INTO veg (username,cateringname,address,email,password,category,location,phone) 
	VALUES ('$name','$cname','$add','$email','$ps1','$ct','$loc','phone')";

    $run=mysqli_query($con,$query);
	if($run)
	{
		echo '<script type="text/javascript">
		      alert("form submitted successfully");
			  </script>';
		//echo "Notice Submitted Successfully!";
		header("Location:register.php");
	}
	else
	{
		echo '<script type="text/javascript">
		alert("failed to submit");
		</script>';
	}
	
	}//ct brace
	else if(($ct)=="nonveg")
  {
	  
	$query= "INSERT INTO nonveg (username,cateringname,address,email,password,category,location,phone) 
	VALUES ('$name','$cname','$add','$email','$ps1','$ct','$loc','$phone')";

    $run=mysqli_query($con,$query);
	if($run)
	{
		echo '<script type="text/javascript">
		     alert("form submitted successfully");
			 </script>';
			 
		//echo "Notice Submitted Successfully!";
		header("Location:register.php");
	}
	else
	{
		echo '<script type="text/javascript">
		alert("failed to submit");
		</script>';
	}  
  }
  
  else if(($ct)=="both")
  {
	  
	$query= "INSERT INTO mix (username,cateringname,address,email,password,category,location,phone) 
	VALUES ('$name','$cname','$add','$email','$ps1','$ct','$loc','$phone')";

    $run=mysqli_query($con,$query);
	if($run)
	{
		echo '<script type="text/javascript">
		     alert("form submitted successfully");
			 </script>';
			 
		//echo "Notice Submitted Successfully!";
		header("Location:register.php");
	}
	else
	{
		echo '<script type="text/javascript">
		alert("failed to submit");
		</script>';
	}  
  }
  
  
 
  
  
  
 
  
  
  
	
	
	//if count end brace
 }
}
?>