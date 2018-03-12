<?php 
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
?>
<script>
 $(document).ready(function() {
$("#submitapp").click(function() {
	var delapp11=$("#delapp11").val();
	$.post("delcheck_appointments.php",{delapp11:delapp11},
	function(result)
		{ 
			if(result!="")
			{ 
				$("#result5").html(result).show();
			}
			
		});

		     
});

});
</script>
<script>
	$(document).ready(function(){
    $("#delapp11").keyup(function(event){
    if(event.keyCode == 13){
        $("#submitapp").click();
    }
});
	});
	</script>
<table id="maintable" width="100%">
 <td>
  <form onsubmit="return false;">
  <table id="tableprofile">
  <tr id="trprofile"><p style="text-align:center; color:blue; font-size:160%;">Cancel Appointment</p></tr>
  <tr id="trprofile">
  <td id="tdprofile">Enter Appointment ID to be deleted</td>
  <td id="tdprofile"><input type="text" id="delapp11" name="delapp11" placeholder="Appointment ID"></td>
  </table>
  <p>
    		<center><input id="submitapp"type="button" value="Cancel Appointment"><input type="reset" value="Reset"></center>
    	</p>
		<center><span id="result5"></span></center>
	</form>
	</td>
 		

</table	>
</td>
</table>


		
		