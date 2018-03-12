<?php
include '../connection.php';
$patientid_1=$_POST['pid_1'];
$number_1=$_POST['password_1'];
$sql="SELECT COUNT(*) FROM patient WHERE (Patient_ID='$patientid_1' AND Contact_NO='$number_1')";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);

if($patientid_1=="")
{ $returnfalse="Field(s) cannot be empty. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($number_1=="")
{ $returnfalse="Field(s) cannot be empty. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($row[0]==0)
{
	$returnfalse="You will only be able to login once a record has been created for you.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else
{
	session_start();
	$_SESSION['pid']=$patientid_1;
	echo 1;
	
}
?>