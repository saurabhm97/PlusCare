<?php
include '../connection.php';

$appointmentid=$_POST['appointmentid'];

$sql="SELECT Appointment_ID from appointments WHERE Appointment_ID='$appointmentid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$name=$row[0];

if($appointmentid=="")
{ $check=1;
}
else 
	$check=0;
if(!$name)
{ $check1=1;
}
else
{ $check1=0;
}

if($check==1 && $check1==1)
{ echo "Appointment ID not entered!";
}
else if($check==0 && $check1==1)
{ echo "Appointment does not exist!";
}
else
{ echo "Appointment exists";
} 
?>
