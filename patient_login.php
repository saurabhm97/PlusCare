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
	span.tagline1
	{ font-family: 'Raleway', sans-serif;
        font-size:25px;
		color:white;
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
    <!--<script>
$(document).ready(function(){
$("#submitaa").click(function(){
var regno = $("#regno").val();
var username = $("#username").val();
var password = $("#password").val();
var name = $("#name").val();
var email = $("#email").val();
var ftext="";
if(name==""||email==""||password=="" ||username=="" ||regno=="")
{
ftext="Oops. You missed out one or more fields."
}
if(ftext=="")
{
	$.post("signupcheck.php", {regno:regno,username:username,password:password,name:name,email:email}, function(result){
    $("#result").html(result);
        });
}

$("#result").html(ftext);

});
});

	</script>--> 
    <script type="text/javascript">
	$(document).ready(function(){
		$("#submitbb").click(function(){
			var pid_1=$("#pid_1").val();
			var password_1=$("#number_1").val();
			$.post("patient_logincheck.php",{pid_1:pid_1,password_1:password_1},
			function(result)
			{
				if (result==1)
				{
					window.location.replace("/patient/");
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
    $("#email").keyup(function(event){
    if(event.keyCode == 13){
        $("#submitaa").click();
    }
});
	});
	</script>
    <script>
	$(document).ready(function(){
    $("#password2").keyup(function(event){
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
    <td><span class="logo" ><img src="pluscarelogo.png" style="height:200px;width:430px"></span></td>
    </tr>
    <tr>
    <td><span class="tagline">PlusCare Solutions©<br>Patient Login</span></td>
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
    <input type="text" id="pid_1" name="pid_1" placeholder="Patient ID"><br>
    <input type="password" id="number_1" name="number_1" placeholder="Contact Number"><br><br>
    <input id="submitbb" type="button" value="Sign In"><br><br>
    <span id="result2"></span>
	</form>
	<!--<span class="tagline1">You will only be able to login once a record has been created for you.</span>-->
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </table>
	

    </body>
    
	</html>
