<?php
include "connection.php"
?>
<script type="text/javascript">
function closeWindow() {
    setTimeout(function() {
	window.open('','_parent','');
    window.close();
    }, 5000);
    }

    
if(navigator.userAgent.indexOf("Chrome") == -1)
{ alert("Please use Chrome for a better experience.");
  window.onload = closeWindow();
  
}	
</script>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="basic.css">

<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#contentShow").load("home.php");
    $(".loginview").hide();
	$(".loginview").width('20%');
	$(".loginbtn").hover(function(){
		$(".loginview").fadeIn();
	});
	$(".loginview").mouseleave(function(){
		$(".loginview").hide();
});

  $("#homeButton").click(function(){
		  $("#contentShow").load("home.php");
      $("#homeButton").css({
      "background-color": "black",
      "text-decoration":"underline"
    });
    $("#searchMedButton").css({
    "background-color": "#0000b3",
    "text-decoration":"none"
  });
  $("#contactButton").css({
  "background-color": "#0000b3",
  "text-decoration":"none"
});
	});
  $("#bookButton").click(function(){
		  $("#contentShow").load("book_appointment.php");
	});
  $("#searchMedButton").click(function(){
		  $("#contentShow").load("medicine.php");
      $("#searchMedButton").css({
      "background-color": "black",
      "text-decoration":"underline"
    });
    $("#contactButton").css({
    "background-color": "#0000b3",
    "text-decoration":"none"
  });
  $("#homeButton").css({
  "background-color": "#0000b3",
  "text-decoration":"none"
});
	});
  $("#contactButton").click(function(){
		  $("#contentShow").load("contact.php");
      $("#searchMedButton").css({
      "background-color": "#0000b3",
      "text-decoration":"none"
    });
    $("#contactButton").css({
    "background-color": "black",
    "text-decoration":"underline"
  });
  $("#homeButton").css({
  "background-color": "#0000b3",
  "text-decoration":"none"
});
});

});
</script>


<title>PlusCare</title>

<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Prociono" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


</head>

<body>

<div class="sec1">
<center><a href="/"><img id="logo" src="pluscarelogo.png"></a></center>
 </div>
<div class="sec2">
<table class="navu">
<tr>
<td id="homeButton"><div>Home</div></td>
<td id="searchMedButton"><div>Search for Medicine</div></td>
<td id="contactButton"><div>Contact Us</div></td>
<td class="loginbtn">Login</td>
</tr>
</table>

<div class="loginview">
<table class="loginview1">
<tr>
<td><a href="/login/staff_login.php"</a>Staff Login</td>
</tr>
<tr>
<td><a href="/login/doctor_login.php"</a>Doctor Login</td>
</tr>
<tr>
<td><a href="/login/patient_login.php"</a>Patient Login</td>
</tr>
</table>
</div>
</div>


<div id="contentShow"></div>


 </body>
</html>

