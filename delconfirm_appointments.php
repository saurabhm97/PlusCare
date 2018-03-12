<?php 
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
$delapp10=$_POST['delapp10'];
$sql11="DELETE FROM appointments WHERE Appointment_ID='$delapp10'";
$result11 = mysqli_query($conn,$sql11) or die("Error: ".mysqli_error($conn));
echo 1;
?>