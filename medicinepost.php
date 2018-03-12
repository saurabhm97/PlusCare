<?php
include "../connection.php";
$medicine=$_POST['medicine'];
$dosage=$_POST['dosage'];
$count=$_POST['count'];
$docid2=$_POST['docid2'];
$patientsid=$_POST['patientsid'];
$appointmentid=$_POST['appointmentid'];
$date2=$_POST['date2'];
$time2=$_POST['time2'];
$type2=$_POST['type2'];
$medicineArr=explode(',',$medicine);
$dosageArr=explode(',',$dosage);
for($i=0;$i<$count;$i++)
{
	
	$sql="INSERT INTO prescription (Patient_ID,Doctor_ID,Appointment_ID,medicine,dosage) VALUES ($patientsid,$docid2,'$appointmentid','$medicineArr[$i]','$dosageArr[$i]')";
	$sqlresult=mysqli_query($conn,$sql);
}
$sql2="INSERT INTO appointments_past(Patient_ID,Doctor_ID,Appointment_ID,Date,Time,Type) VALUES('$patientsid','$docid2','$appointmentid','$date2','$time2','$type2')";
$result=mysqli_query($conn,$sql2) or die(mysqli_error());
$sql3="DELETE from appointments WHERE Appointment_ID='$appointmentid'";
$result3=mysqli_query($conn,$sql3) or die(mysqli_error());
echo 1;
?>	