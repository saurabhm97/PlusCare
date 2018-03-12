<?php
session_start();
include "../connection.php";
$docid=$_SESSION['docid'];
$procid=$_POST['procid'];

$sql="SELECT Patient_ID FROM appointments WHERE Appointment_ID='$procid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$pid=$row[0];

$sql1="SELECT Date FROM appointments WHERE Appointment_ID='$procid'";
$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
$date=$row1[0];

$sql2="SELECT Time FROM appointments WHERE Appointment_ID='$procid'";
$result2=mysqli_query($conn,$sql2);
$row2=mysqli_fetch_array($result2);
$time=$row2[0];

$sql3="SELECT Type FROM appointments WHERE Appointment_ID='$procid'";
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($result3);
$type=$row3[0];

$sql4="SELECT Name FROM patient WHERE Patient_ID='$pid'";
$result4=mysqli_query($conn,$sql4);
$row4=mysqli_fetch_array($result4);
$pname=$row4[0];


?>







<!--<script>
$(document).ready(function() {
$("#check").click(function() {
	var patientsid=$("#patientsid").val();
	$.post("check.php",{patientsid:patientsid},
	function(result)
		{ 
			if(patientsid="")
			{ $("#feedback").html("Please enter a Patient ID.").show();
		    }
			if(result!="")
			{ 
				$("#feedback").html(result).show();
			}
			else
			{ 
				$("$feedback").html("Patient record does not exist.").show();
		    }
		});

		     
});

$("#check1").click(function() {
	var appointmentid=$("#appointmentid").val();
	$.post("check1.php",{appointmentid:appointmentid},
	function(result)
		{ 
			if(appointmentid="")
			{ $("#feedback1").html("Please enter an Appointment ID.").show();
		    }
			if(result!="")
			{ 
				$("#feedback1").html(result).show();
			}
			else
			{ 
				$("$feedback1").html("Appointment does not exist.").show();
		    }
		});

		     
});

});

</script>
-->
<script type="text/javascript">
$(document).ready(function(){
	var count=0;
	$("#add").click(function(){
		count++;
		$("#result").append("<div id='cont"+count+"'><input type='text' placeholder='Medicine' id='first"+count+"' name='first"+count+"'><input type='text' placeholder='Dosage' id='second"+count+"' name='second"+count+"'></div>");
	});
	$("#remove").click(function(){
		if(count>0)
		{
		$("#cont"+count).remove();
		count--;
		}
	});
	$("#submitapp").click(function(){
		var send1="";
		var send2="";
		var i=0;
		for(i=1;i<=count;i++)
		{
			send1=send1+$("#first"+i).val()+",";
		}
		for(i=1;i<=count;i++)
		{
			send2=send2+$("#second"+i).val()+",";
		}
		//alert(send1+send2);
		var docid2=$("#docid2").val();
		var patientsid=$("#patientid2").val();
		var appointmentid=$("#appid2").val();
		var date2=$("#date2").val();
		var time2=$("#time2").val();
		var type2=$("#type2").val();
		$.post("medicinepost.php", {count:count,medicine:send1,dosage:send2,docid2:docid2,patientsid:patientsid,appointmentid:appointmentid,date2:date2,time2:time2,type2:type2}, function(result){
			if(result==1)
			{ 
				$("#result23").html("Prescription Generated").show();
				$().delay(2500000000);
					window.location.replace("../doctor/");
			}
			else
			{ 
				$("#result23").html(result);
		    }
            	
        });
		
	});
});
</script>
<input type="hidden" id="docid2" name="docid2" value="<?php echo $docid;?>">
<input type="hidden" id="patientid2" name="patientid2" value="<?php echo $pid;?>">
<input type="hidden" id="appid2" name="appid2" value="<?php echo $procid;?>">
<input type="hidden" id="date2" name="date2" value="<?php echo $date;?>">
<input type="hidden" id="time2" name="time2" value="<?php echo $time;?>">
<input type="hidden" id="type2" name="type2" value="<?php echo $type;?>">
<table id="maintable" width="100%">
 <td>
  <form>
  <table id="tableprofile">
  <tr id="trprofile"><p style="text-align:center; color:blue; font-size:160%;">Generate Prescription</p>
  </tr>
   <tr id="trprofile">
   <td id="tdprofile">Doctor ID</td>
   <td id="tdprofile"><?php echo $docid;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Patient ID</td>
   <td id="tdprofile"><?php echo $pid;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Patient Name</td>
   <td id="tdprofile"><?php echo $pname;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Appointment ID</td>
   <td id="tdprofile"><?php echo $procid;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Appointment Date</td>
   <td id="tdprofile"><?php echo $date;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Appointment Time</td>
   <td id="tdprofile"><?php echo $time;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Appointment Type</td>
   <td id="tdprofile"><?php echo $type;?></td>
   </tr>
   
   <tr id="trprofile">
   <td id="tdprofile">Medicine and Dosage</td>
   <td id="tdprofile"><div id="result">
	</div>
	<div id="result3">
	</div><input type="button" value="Add" id="add">
	<input type="button" value="Remove" id="remove">

   </td>
   </tr>
   
   </table>
   <p>
    		<center><input id="submitapp"type="button" value="Generate"><input type="reset" value="Reset"></center>
			
    	</p>
		<center><span id="result23"></span></center>
  </form>
</td>
</table>
