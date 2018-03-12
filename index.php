<?php
session_start();

include '../connection.php';


if(!isset($_SESSION['docid']))
{
echo'You do not seem to be logged in. Please login first.';
}
else
{
$docid=$_SESSION['docid'];
$sql="SELECT Doctor_ID FROM doctor WHERE Doctor_ID='$docid'";
$result = mysqli_query($conn,$sql) or die('Error: '.mysqli_error($conn));
$row = mysqli_fetch_array($result);
$id=$row[0];
$sql2="SELECT Name FROM doctor WHERE Doctor_ID='$id'";
$result2 = mysqli_query($conn,$sql2) or die('Error: '.mysqli_error($conn));
$row2 = mysqli_fetch_array($result2);
$name=$row2[0];
$sql3="SELECT DOB FROM doctor WHERE Doctor_ID='$id'";
$result3 = mysqli_query($conn,$sql3) or die('Error: '.mysqli_error($conn));
$row3 = mysqli_fetch_array($result3);
$dob=$row3[0];
$sql4="SELECT Gender FROM doctor WHERE Doctor_ID='$id'";
$result4 = mysqli_query($conn,$sql4) or die('Error: '.mysqli_error($conn));
$row4 = mysqli_fetch_array($result4);
$gender=$row4[0];
$sql5="SELECT Desgn FROM doctor WHERE Doctor_ID='$id'";
$result5 = mysqli_query($conn,$sql5) or die('Error: '.mysqli_error($conn));
$row5 = mysqli_fetch_array($result5);
$desgn=$row5[0];
$sql6="SELECT Password FROM doctor WHERE Doctor_ID='$id'";
$result6 = mysqli_query($conn,$sql6) or die('Error: '.mysqli_error($conn));
$row6 = mysqli_fetch_array($result6);
$pass=$row6[0];
$sql7="SELECT PasswordDefault FROM doctor WHERE Doctor_ID='$id'";
$result7 = mysqli_query($conn,$sql7) or die('Error: '.mysqli_error($conn));
$row7 = mysqli_fetch_array($result7);
$passd=$row7[0];

?>
<!doctype html>
<html>
<head>
<title>PlusCare Solutions©-Doctor Login</title>
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<link rel='stylesheet' href='styles.css'>
 <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
 <script src='script.js'></script>
 <script>
 $(document).ready(function(){
 $('#profileview').click(function(){
		  $('#contentShow').load('profile1.php');
      $('#profileview').css({
      'color': 'black',
      'text-decoration':'underline'
    });
	$("#changepass1").css({
    'color':'black',
    "text-decoration":"none"
  });
	
	});
 $('#changepass1').click(function(){
		  $('#contentShow').load('doctor_changepass.php');
      $('#changepass1').css({
      'color': 'black',
      'text-decoration':'underline'
    });
	$("#profileview").css({
    'color':'black',
    "text-decoration":"none"
  });
	});
 $('#createpres').click(function(){
		  $('#contentShow').load('view_appointments.php');
      
    });
 $('#viewpast').click(function(){
		  $('#contentShow').load('view_past.php');
      
    });
 $('#cancelapp').click(function(){
		  $('#contentShow').load('delete_appointments.php');
      
    });
 $('#viewpatient').click(function(){
		  $('#contentShow').load('enter_patientid.php');
      
    });
 $('#viewmed').click(function(){
		  $('#contentShow').load('tempmed.php');
      
    });
 });	
 </script>
</head>




<body>
<div class='sec1'>

<table width='100%'>
<tr>
<td width='33%'>
<img id='logo' src='/logos/pluscarelogo.png'></a>
</td>
<td width='33%' style='vertical-align:middle'>
<center><span id='p1'>Welcome, <?php echo $name;?></span></center><br>
</td>
<td width='33%' style='vertical-align:middle'>
<table width="100%" style="text-align:center;border:thin solid black">
<td>
<tr id="tr1">
<td id='profileview' width="33%">Profile</td> 

<td id='changepass1' width="33%">Change Password</td>

<td><a id="signout" href="../logout.php" style="text-decoration:none;">Sign out</td>
</tr>
</td>
</table>
</td>
</tr>
</table>
</div>
<table width='100%'>
<tr>
<td width='20%' valign='top'>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='../doctor'><span>Home</span></a></li>
   <li class='has-sub'><a href='#'><span>Lab Reports</span></a>
      <ul>
         <li><a href='#'><span>View All Reports</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Appointments</span></a>
      <ul>
         <li><span id='createpres' style="cursor:pointer;">Generate Prescription</span></li>
		 <li><span id='viewpast' style="cursor:pointer;">View Past Appointments</span></li>
		 <li><span id='cancelapp' style="cursor:pointer;">Cancel Appointment</span></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Patient</span></a>
      <ul>
         <li><span id='viewpatient' style="cursor:pointer;">View Patient Record</span></li>
         
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Medicines</span></a>
       <ul>
         <li><span id='viewmed' style="cursor:pointer;">View All Medicines</span></li>
		
	</ul>
	</li>

</ul>
</div>
</td>
<td width='80%' style='vertical-align:top'>	
<span><?php if($pass==$passd) echo"<p><center>Please change your default password for better security.</center></p>";?></span>

<div id='contentShow'></div>
<span id="result4"></span>
</td>
</tr>

</table>
</body>
</html>
<?php } ?>
