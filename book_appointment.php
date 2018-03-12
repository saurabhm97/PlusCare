<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="basic.css">
<title>PlusCare</title>
<style>




</style>
</head>

<body>
<div class="sec1">
<a href="index.php"><img id=logo src="pluscarelogo.png"></a>
 </div>
<div class="sec2">
 <a href="index.php">Home</a>
 <a href="book_appointment.php">Book Appointment</a>
 <a href="medicine.php">Search for Medicine</a>
 <a href="contact.php">Contact Us</a>
 </div>

<form>
<h3> Book an Appointment</h3>
<input type="text" placeholder="Patient's Name"><br>
<input type="text" placeholder="Patient ID"><br>
<input type="date" placeholder="Appointment Date"><br>
<input type="text" placeholder="Doctors Name"><br>
Type of Consultation<select name="Type">
<option value ="Emergency">Emergency</option>
<option value="New Consultation">New Consultation</option>
<option value="Follow-up">Follow-up</option>
</select><br>
<input type="submit" value="Submit Details">
<input type="reset">
</form>
<br>
<p>This page will be refined and improved for the further reviews.</p>


</body>
</html>