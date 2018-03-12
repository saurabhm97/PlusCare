<?php
session_start();
include '../connection.php';

$docid=$_SESSION['docid'];
$sql="SELECT * FROM medicine;";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
?>

<table id="maintable" width="100%">
 <td>
  <table id="tableprofile">
  <tr id="trprofile"><p style="text-align:center; color:blue; font-size:160%;">View Medicines</p></tr>
  <tr id="trprofile">
	<th>Medicine ID</th>
	<th>Medicine Name</th>
	<th>Medicine Price</th>
	</tr>
<?php while($row=mysqli_fetch_array($result)) { ?>
<tr id="trprofile">
<td id="tdprofile"><?php echo $row['idno']; ?></td>
<td id="tdprofile"> <?php echo $row['name']; ?></td>
<td id="tdprofile"> <?php echo $row['price']; ?></td>
</tr>
<?php } ?>
</table>
</td>
</table>

	

