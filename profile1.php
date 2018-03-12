<?php
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
$sql="SELECT Doctor_ID FROM doctor WHERE Doctor_ID='$docid'";
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
$sql6="SELECT Department FROM doctor WHERE Doctor_ID='$id'";
$result6 = mysqli_query($conn,$sql6) or die("Error: ".mysqli_error($conn));
$row6 = mysqli_fetch_array($result6);
$department=$row6[0];
$sql7="SELECT Blood_Grp FROM doctor WHERE Doctor_ID='$id'";
$result7 = mysqli_query($conn,$sql7) or die("Error: ".mysqli_error($conn));
$row7 = mysqli_fetch_array($result7);
$blood_grp=$row7[0];
$sql8="SELECT Link FROM doctor_profilepic WHERE Doctor_ID='$id'";
$result8 = mysqli_query($conn,$sql8) or die("Error: ".mysqli_error($conn));
$row8 = mysqli_fetch_array($result8);
$picture=$row8[0];

?>
  <table id="maintable" width="100%">
  <td width="70%">
  <table id="tableprofile">
    <tr id="trprofile"><p style="text-aign:center; color:blue; font-size:160%;">Profile</p>
	
    </tr>
    <tr id="trprofile">
      <td id="tdprofile">Name</td>
      <td id="tdprofile"><?php echo $name; ?></td>
    </tr>
    <tr id="trprofile">
      <td id="tdprofile">Doctor ID</td>
      <td id="tdprofile"><?php echo $id; ?></td>
    </tr>
    <tr id="trprofile">
      <td id="tdprofile">Date of Birth</td>
      <td id="tdprofile"><?php echo $dob; ?></td>
    </tr>
    <tr id="trprofile">
     <td id="tdprofile">Gender</td>
     <td id="tdprofile"><?php if($gender=='M') echo "Male";else if($gender=='F')echo "Female"; ?></td>
   </tr>
   <tr id="trprofile">
     <td id="tdprofile">Designation</td>
     <td id="tdprofile"><?php echo $desgn; ?></td>
	 <tr id="trprofile">
     <td id="tdprofile">Department</td>
     <td id="tdprofile"><?php echo $department; ?></td>
	 <tr id="trprofile">
     <td id="tdprofile">Blood Group</td>
     <td id="tdprofile"><?php echo $blood_grp; ?></td>
   </tr>
 </table>
 </td>
 <td width="30%">
 <table id="displaypic">
  <tr>
  <td><img src="<?php echo $picture; ?>" style="height:100px;width:100px;" onerror="if (this.src != 'default.png') this.src = 'default.png';"></td>
  </tr>
  </table>
  