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
			var docid_1=$("#docid_1").val();
			var password_doc=$("#password_doc").val();
			$.post("doctor_logincheck.php",{docid_1:docid_1,password_doc:password_doc},
			function(result)
			{
				if (result==1)
				{
					window.location.replace("/doctor/");
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
    $("#password_doc").keyup(function(event){
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
    <td><span class="tagline">PlusCare Solutions©<br>Doctor Login</span></td>
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
    <input type="text" id="docid_1" name="docid_1" placeholder="Doctor ID"><br>
    <input type="password" id="password_doc" name="password_doc" placeholder="Password"><br><br>
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
