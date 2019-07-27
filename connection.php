<?php
$server="localhost";
$user_con="root";
$pass_con="";
$dbname="multi_login";
$con=mysqli_connect($server,$user_con,$pass_con,$dbname);
if(!$con)
{
die("Failed to connect db".mysqli_connect_error());
}
?>



