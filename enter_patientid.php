<?php 
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
?>

<script>
 $(document).ready(function() {
$("#submitapp").click(function() {
	var viewpatienta=$("#viewpatienta").val();
	$.post("viewpatient.php",{viewpatienta:viewpatienta},
	function(result)
		{ 
			if(result!="")
			{ 
				$("#result6").html(result).show();
			}
			
		});

		     
});

});
</script>
<script>
	$(document).ready(function(){
    $("#viewpatienta").keyup(function(event){
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
  <tr id="trprofile"><p style="text-align:center; color:blue; font-size:160%;">Patient Details</p></tr>
  <tr id="trprofile">
  <td id="tdprofile">Enter Patient ID</td>
  <td id="tdprofile"><input type="text" id="viewpatienta" name="viewpatienta" placeholder="Patient ID"></td>
  </table>
  <p>
    		<center><input id="submitapp"type="button" value="Search"><input type="reset" value="Reset"></center>
    	</p>
		<center><span id="result6"></span></center>
	</form>
	</td>
 		

</table	>
</td>
</table>


		
		