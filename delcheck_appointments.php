<?php
session_start();
include '../connection.php';

$delapp=$_POST['delapp11'];
$docid=$_SESSION['docid'];
$sql="SELECT * FROM appointments WHERE Appointment_ID='$delapp'";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$sql1="SELECT Appointment_ID FROM appointments WHERE Appointment_ID='$delapp' AND Doctor_ID='$docid'";
$result1 = mysqli_query($conn,$sql1) or die("Error: ".mysqli_error($conn));
$row1=mysqli_fetch_array($result1);
$apid=$row1[0];

if($delapp=="")
{ $check=1;
}
else 
	$check=0;
if(!$apid)
{ $check1=1;
}
else
{ $check1=0;
}

?>
<script>
$(document).ready(function() {
 $("#submitapp2").click(function() {
	var delapp1=$("#delapp1").val();
	$.post("delconfirm_appointments.php",{delapp10:delapp1},
	function(result)
		{ 
			if(result==1)
			{ 
				$("#result7").html("Appointment deleted successfully").show();
				$().delay(2500000000);
					window.location.replace("../doctor/");
			}
			else
			{ 
				$("#result7").html(result);
		    }
		});

 }); 
 $("#nocancel").click(function() {
	 window.location.replace("../doctor/");
 });
	 
	 
});

</script>


<input type="hidden" id="delapp1" name="delapp1" value="<?php echo $delapp;?>">
<?php
if($check==1 && $check1==1)
{ $returnfalse="Please enter an Appointment ID";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($check==0 && $check1==1)
{ $returnfalse="You can only delete your appointments!";
	echo "<span class='false'>".$returnfalse."</span>";
}
else
{

echo"<table id='maintable' width='100%'>
 <td>
  <table id='tableprofile'>
  <tr id='trprofile'><p style='text-align:center; color:blue; font-size:160%;'> </p></tr>
  <tr id='trprofile'>
	<th>Patient ID</th>
	<th>Doctor ID</th>
	<th>Appointment ID</th>
	<th>Date(Y-M-D)</th>
	<th>Time</th>
	<th>Type of Consultation</th> 
	</tr>";
	?>
<?php while($row=mysqli_fetch_array($result)) { ?>
<?php echo"<tr id='trprofile'>
<td id='tdprofile'>";?><?php echo $row['Patient_ID']; ?><?php echo"</td>";?>
<?php echo"<td id='tdprofile'>";?> <?php echo $row['Doctor_ID']; ?><?php echo"</td>";?>
<?php echo"<td id='tdprofile'>";?> <?php echo $row['Appointment_ID']; ?><?php echo"</td>";?>
<?php echo"<td id='tdprofile'>";?> <?php echo $row['Date']; ?><?php echo"</td>";?>
<?php echo"<td id='tdprofile'>";?> <?php echo $row['Time']; ?><?php echo"</td>";?>
<?php echo"<td id='tdprofile'>";?> <?php echo $row['Type']; ?><?php echo"</td>";?>
<?php echo"</tr>";?>
<?php } ?>
<?php echo "</table>
<center><p> Are you sure you want to delete the mentioned appointment??</p></center>
<center><input id='submitapp2' type='button' value='Yes'><input id='nocancel'type='button' value='No'></center>
    	
		<center><span id='result7'></span></center>
</td> 
</table>";
}?>