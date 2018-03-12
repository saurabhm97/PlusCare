<?php
include '../connection.php';
$docid_1=$_POST['docid_1'];
$password_doc=$_POST['password_doc'];
$sql="SELECT COUNT(*) FROM doctor WHERE (Doctor_ID='$docid_1' AND Password='$password_doc')";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);

if($docid_1=="")
{ $returnfalse="Field(s) cannot be empty. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($password_doc=="")
{ $returnfalse="Field(s) cannot be empty. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($row[0]==0)
{
	$returnfalse="Invalid Doctor ID and/or Password. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else
{
	session_start();
	$_SESSION['docid']=$docid_1;
	echo 1;
	
}
?>