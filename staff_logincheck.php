<?php
include 'connection.php';
$employee=$_POST['empid_1'];
$password=$_POST['password_1'];
$sql="SELECT COUNT(*) FROM STAFF WHERE (Employee_ID='$employee' AND Password='$password')";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);
if($row[0]==0)
{
	$returnfalse="Invalid Employee_ID and/or Password. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else
{
	session_start();
	$_SESSION['Employee_ID']=$employee;
	echo 1;
	
}
?>