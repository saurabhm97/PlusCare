<?php
session_start();
if(isset($_SESSION['empid']))
{
header("location:../staff/");
}   
else
{

?>
   <!doctype html>
    <html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
    <meta charset="utf-8">
    <title>PlusCare Solutions©</title>
    <style type="text/css">
	.true,.false
	{
		font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		font-size:18px;
	}
	.true
	{
		color:green;
	}
	.false
	{
		color:white;
	}
    #bodyhi
    {
        background-color:#787878;
    }
    span.logo
    {
        width:10px;
		height:10px;
    }
    span.tagline
    {
        font-family: 'Raleway', sans-serif;
        font-size:25px;
    }
    table.header
    {
        width:100%;
        border-spacing:0px;
        border-collapse:collapse;
		text-align:center;
    }
	td.fake
	{
		border:thin solid grey;
	}
	table.ls,table.login
	{
		width:100%;
		text-align:center;
		background-color:blue;
	}
	input
	{
		font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
		font-size:25px;
		border: thin solid rgb(247, 231, 206);
		text-align:center;
	}









    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){
		$("#submitbb").click(function(){
			var empid_1=$("#empid_1").val();
			var password_1=$("#password_1").val();
			$.post("staff_logincheck.php",{empid_1:empid_1,password_1:password_1},
			function(result)
			{
				if (result==1)
				{
					window.location.replace("/staff/");
				}
				else
				{
					$("#result2	").html(result);
				}
			});
		});
	});
	</script>
    
    <script>
	$(document).ready(function(){
    $("#password_1").keyup(function(event){
    if(event.keyCode == 13){
        $("#submitbb").click();
    }
});
	});
	</script>

    </head>

    <body id="bodyhi">
    
	<table class="header">
    <tr>
    <td><span class="logo" ><a href="../"><img src="pluscarelogo.png" style="height:200px;width:430px"></a></span></td>
    </tr>
    <tr>
    <td><span class="tagline">PlusCare Solutions©<br>Staff Login</span></td>
    </tr>
	<tr>
	<td><?php if(isset($_GET['var'])){if($_GET['var']==1){echo"You have successfully logged out.";} else if($_GET['var']==2) {echo"You have successfully changed your password.Please login again.";}}?></td>
	</tr>
    </table>
    <br><br>

    <table class="ls">
    <tr>
    <td>

    <table class="login">
    <tr>
    <td>
    <form>

    <input type="text" id="empid_1" name="empid_1" placeholder="Employee ID"><br>
    <input type="password" id="password_1" name="password_1" placeholder="Password"><br><br>
    <input id="submitbb" type="button" value="Sign In"><br><br>
    <span id="result2"></span>
	</form>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>


    </body>

	</html>
<?php } ?>