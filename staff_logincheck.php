<?php
include '../connection.php';
$employee=$_POST['empid_1'];
$password=$_POST['password_1'];
$sql="SELECT COUNT(*) FROM staff WHERE (Employee_ID='$employee' AND Password='$password')";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);

if($employee=="")
{ $returnfalse="Field(s) cannot be empty. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($password=="")
{ $returnfalse="Field(s) cannot be empty. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($row[0]==0)
{
	$returnfalse="Invalid Employee ID and/or Password. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else
{
	session_start();
	$_SESSION['empid']=$employee;
	echo 1;
	
}
?>