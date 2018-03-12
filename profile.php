<?php
include 'connection.php';
session_start();
$empid=$_SESSION['empid'];
$sql="SELECT Employee_ID FROM staff WHERE Employee_ID='$empid'";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$row = mysqli_fetch_array($result);
$id=$row[0];
$sql2="SELECT Name FROM staff WHERE Employee_ID='$id'";
$result2 = mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn));
$row2 = mysqli_fetch_array($result2);
$name=$row2[0];
$sql3="SELECT DOB FROM staff WHERE Employee_ID='$id'";
$result3 = mysqli_query($conn,$sql3) or die("Error: ".mysqli_error($conn));
$row3 = mysqli_fetch_array($result3);
$dob=$row3[0];
$sql4="SELECT Gender FROM staff WHERE Employee_ID='$id'";
$result4 = mysqli_query($conn,$sql4) or die("Error: ".mysqli_error($conn));
$row4 = mysqli_fetch_array($result4);
$gender=$row4[0];
$sql5="SELECT Desgn FROM staff WHERE Employee_ID='$id'";
$result5 = mysqli_query($conn,$sql5) or die("Error: ".mysqli_error($conn));
$row5 = mysqli_fetch_array($result5);
$desgn=$row5[0];
?>
<!doctype html>
<body>

<div id="Profiletable">
  <table>
    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    <tr>
      <td>Name</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>Employee< ID/td>
      <td><?php echo $id; ?></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><?php echo $dob; ?></td>
    </tr>
    <tr>
     <td>Gender</td>
     <td><?php if($gender=='M') echo "Male";else if($gender=='F')echo "Female"; ?></td>
   </tr>
   <tr>
     <td>Designation</td>
     <td><?php echo $desgn; ?></td>
   </tr>
 </table>
 </body>
 </html>
