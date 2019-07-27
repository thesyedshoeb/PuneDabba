<?php
session_start();
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
 echo $name=$_POST['username'];
 echo $cname=$_POST['cateringname'];
 echo $add=$_POST['address'];
 echo $email=$_POST['email'];
 echo $ps1=$_POST[password_1];
 echo $ct=$_POST[cat];`
 echo $loc=$_POST[loc];
 echo $ps2=$_POST[password_2];

 
   $query= "INSERT INTO veg (username,cateringname,address,email,password,category,location) 
	VALUES ('$name','$cname','$add','$email','$ps1','$ct','$loc')";

    $run=mysqli_query($con,$query);
	if($run)
	{
		echo "Notice Submitted Successfully!";
	}
	else
		echo "There was an error!";
 }
 
 
 
 
 	<!--
	
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2" placeholder="Confirm Password..">
	</div>
	<div >
		<label>Category</label>
		<input type="radio" name="cat" value="veg" checked="check">Veg
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
 
?>