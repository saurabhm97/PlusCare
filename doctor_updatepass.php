<?php
session_start();
include '../connection.php';

$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$empid=$_SESSION['docid'];

$sql="SELECT Doctor_ID FROM doctor WHERE Doctor_ID='$empid'";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);
$id=$row[0];
$sql1="SELECT Password FROM doctor where Doctor_ID='$empid'";
$result1 = mysqli_query($conn,$sql1) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result1);
$pass=$row[0];
$sql2="SELECT PasswordDefault FROM doctor where Doctor_ID='$empid'";
$result2 = mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result2);
$passd=$row[0];
if($oldpass=="" || $newpass=="")
{ $returnfalse="Field(s) cannot be empty.Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($oldpass==$newpass)
{ $returnfalse="Passwords cannot be the same.Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($newpass==$passd)
{ $returnfalse="You cannot use your default password anymore.Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}

else if($oldpass!=$pass)
{ $returnfalse="Your current password is incorrect. Please try again.";
	echo "<span class='false'>".$returnfalse."</span>";
}	
else
{ $sql2="UPDATE doctor SET Password='$newpass' where Doctor_ID='$empid'";
  $result2 = mysqli_query($conn,$sql2);
  echo 1;
}
?>