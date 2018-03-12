<?php

include 'connection.php';
$viewpatienta=$_POST['viewpatienta'];
$sql="SELECT * FROM medicine WHERE name='$viewpatienta'";
$sql2="SELECT name FROM medicine WHERE name='$viewpatienta'";
$result = mysqli_query($conn,$sql) or die("Error: ".mysqli_error($conn));
$result2 = mysqli_query($conn,$sql2) or die("Error: ".mysqli_error($conn));
$row2=mysqli_fetch_array($result2);
$id=$row2[0];

if($viewpatienta=="")
{ $check=1;
}
else 
	$check=0;
if(!$id)
{ $check1=1;
}
else
{ $check1=0;
}

if($check==1 && $check1==1)
{ $returnfalse="Please enter a Medicine";
	echo "<span class='false'>".$returnfalse."</span>";
}
else if($check==0 && $check1==1)
{ $returnfalse="Medicine does not exist!";
	echo "<span class='false'>".$returnfalse."</span>";
}
else
{




echo"<table id='maintable' width='100%'>
 <td>
  <table id='tableprofile'>
  <tr id='trprofile'><p style='text-align:center; color:blue; font-size:160%;'>View Medicines</p></tr>
  <tr id='trprofile>
	<th>Medicine ID</th>
	<th>Medicine Name</th>
	<th>Medicine Price</th>
	</tr>";
 while($row=mysqli_fetch_array($result)) { 
echo"<tr id='trprofile'>
<td id='tdprofile'>"; echo $row['idno']; echo"</td>
<td id='tdprofile'>";  echo $row['name']; echo"</td>
<td id='tdprofile'>";  echo $row['price']; echo"</td>
</tr>";
} 
echo"</table>
</td>
</table>";
echo"To search again, please click on the 'Search for medicine' tab";  
}
?>

	

