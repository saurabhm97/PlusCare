<?php
session_start();
include '../connection.php';

$empid=$_SESSION['docid'];
$sql="SELECT Doctor_ID FROM doctor WHERE Doctor_ID='$empid'";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);
$id=$row[0];
$sql2="SELECT Name FROM doctor WHERE Doctor_ID='$id'";
$result2 = mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn));
$row2 = mysqli_fetch_array($result2);
$name=$row2[0];
$sql3="SELECT DOB FROM doctor WHERE Doctor_ID='$id'";
$result3 = mysqli_query($conn,$sql3) or die("Error: ".mysqli_error($conn));
$row3 = mysqli_fetch_array($result3);
$dob=$row3[0];
$sql4="SELECT Gender FROM doctor WHERE Doctor_ID='$id'";
$result4 = mysqli_query($conn,$sql4) or die("Error: ".mysqli_error($conn));
$row4 = mysqli_fetch_array($result4);
$gender=$row4[0];
$sql5="SELECT Desgn FROM doctor WHERE Doctor_ID='$id'";
$result5 = mysqli_query($conn,$sql5) or die("Error: ".mysqli_error($conn));
$row5 = mysqli_fetch_array($result5);
$desgn=$row5[0];
$sql6="SELECT Link FROM doctor_profilepic WHERE Doctor_ID='$id'";
$result6 = mysqli_query($conn,$sql6) or die("Error: ".mysqli_error($conn));
$row6 = mysqli_fetch_array($result6);
$picture=$row6[0];

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
		$("#submitpass").click(function(){
			var oldpass=$("#oldpass").val();
			var newpass=$("#newpass").val();
			$.post("doctor_updatepass.php",{oldpass:oldpass,newpass:newpass},
			function(result)
			{
				if (result==1)
				{
					window.location.replace("../logout.php?var=2");
					
				}
				else
				{
					$("#result3	").html(result);
				}
			});
		});
	});
	</script>
	
	
	
	
<table id="maintable" width="100%">
 <td>
  <form>
  <table id="tableprofile">
  <tr id="trprofile"><p style="text-aign:center; color:blue; font-size:160%;">Change Password</p>
  </tr>
   <tr id="trprofile">
   <td id="tdprofile">Doctor ID</td>
   <td id="tdprofile"><?php echo $id;?></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">Current Password</td>
   <td id="tdprofile"><input type="password" id="oldpass" name="oldpass" ></td>
   </tr>
   <tr id="trprofile">
   <td id="tdprofile">New Password</td>
   <td id="tdprofile"><input type="password" id="newpass" name="newpass"></td>
   </tr>
   </table>
   <p>
    		<center><input id="submitpass"type="button" value="Change Password"><input type="reset" value="Reset"></center>
			
    	</p>
		<center><span id="result3"></span><center>
  </form>
</td>
</table>
  <!--<a href="doctor_updatepass.php">Changepass</a>-->