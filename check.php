<?php
include '../connection.php';

$patientsid=$_POST['patientsid'];

$sql="SELECT Name from patient WHERE Patient_ID='$patientsid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$name=$row[0];

if($patientsid=="")
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
{ echo "Patient ID not entered!";
}
else if($check==0 && $check1==1)
{ echo "Patient does not exist!";
}
{ echo $name;
} 
?>
