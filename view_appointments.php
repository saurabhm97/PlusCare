<?php
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
$sql="SELECT * FROM appointments WHERE Doctor_ID='$docid' ORDER BY Date desc";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
?>



<table id="maintable" width="100%">
 <td>
 <div id="replace">
  <table id="tableprofile">
  <tr id="trprofile"><p style="text-align:center; color:blue; font-size:160%;">View Appointments</p></tr>
  <tr id="trprofile">
	<th>Patient ID</th>
	<th>Doctor ID</th>
	<th>Appointment ID</th>
	<th>Date(Y-M-D)</th>
	<th>Time</th>
	<th>Type of Consultation</th> 
	<th>Generate Prescription</th>
	</tr>
<?php $count1=0;while($row=mysqli_fetch_array($result)) { $count1++;?>
<tr id="trprofile">
<td id="tdprofile"><?php echo $row['Patient_ID']; ?></td>
<td id="tdprofile"> <?php echo $row['Doctor_ID']; ?></td>
<td id="tdprofile"> <?php echo $row['Appointment_ID']; ?></td>
<td id="tdprofile"> <?php echo $row['Date']; ?></td>
<td id="tdprofile"> <?php echo $row['Time']; ?></td>
<td id="tdprofile"> <?php echo $row['Type']; ?></td>
<td id="tdprofile"> <input type="button" value="Process" id="process<?php echo $count1;?>" name="process"></td>
<input type="hidden" id="procid<?php echo $count1;?>" name="procid" value="<?php echo $row['Appointment_ID'];?>">
</tr>
<?php 
echo "<script>
 $(document).ready(function() {
$('#process".$count1."').click(function() {
	var procid=$('#procid".$count1."').val();
	$.post('gen_prescription.php',{procid:procid},
	function(result)
		{ 
			if(result!='')
			{ 
				$('#replace').html(result).show();
			}
			
		});

		     
});

});
</script>";

} ?>
</table>
</div>
</td>
</table>

	

