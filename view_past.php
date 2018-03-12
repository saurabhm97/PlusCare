<?php
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
$sql="SELECT * FROM appointments_past WHERE Doctor_ID='$docid' ORDER BY Date desc";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
?>

<table id="maintable" width="100%">
 <td>
  <table id="tableprofile">
  <tr id="trprofile"><p style="text-align:center; color:blue; font-size:160%;">Past Appointments</p></tr>
  <tr id="trprofile">
	<th>Patient ID</th>
	<th>Doctor ID</th>
	<th>Appointment ID</th>
	<th>Date(Y-M-D)</th>
	<th>Time</th>
	<th>Type of Consultation</th> 
	</tr>
<?php while($row=mysqli_fetch_array($result)) { ?>
<tr id="trprofile">
<td id="tdprofile"><?php echo $row['Patient_ID']; ?></td>
<td id="tdprofile"> <?php echo $row['Doctor_ID']; ?></td>
<td id="tdprofile"> <?php echo $row['Appointment_ID']; ?></td>
<td id="tdprofile"> <?php echo $row['Date']; ?></td>
<td id="tdprofile"> <?php echo $row['Time']; ?></td>
<td id="tdprofile"> <?php echo $row['Type']; ?></td>
</tr>
<?php } ?>
</table>
</td>
</table>

	

