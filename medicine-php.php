<!DOCTYPE html>
<html>
<head>
<title>PlusCare</title>
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet"> 


<style>

	
body
{
	font-family: 'PT Sans', sans-serif;
	
	
}

.sec1 {

  background:linear-gradient(to right,lightblue,white);
  overflow:hidden;
  color:white;
    width: auto;
   
    padding: 30px;
    margin-top:0px;
}



}

li { display:inline; 
}

#u1 {
font-family: 'Quattrocento Sans', sans-serif;
}

.sec2 {
    background-color: #333;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.sec2 a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 100px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.sec2 a:hover {
    background-color: orange;
    color: black;
}

/* Add a color to the active/current link */
.sec2 a.active {
    background-color: #4CAF50;
    color: white;
}

#logo
{
width:430px;
height:200px;
float:center;
margin-left:550px;

}

.sec3
{
font-family: 'Quattrocento Sans', sans-serif;

}

.sec4
{
	border:solid 2px red;
	height:800px;
}
table
{
padding:15px;
margin-left:520px;
text-align:center;
}
tr,td
{
border-radius:25px;
border:solid 2px black;
padding:15px;
margin-left:520px;
text-align:center;

}
th
{
border-radius:25px;
border:solid 2px black;
padding:15px;
margin-left:520px;
color:white;
background-color:blue;
text-align:center;

}

#indiv
{
padding:10px;
margin-left:10px;
border-radius:10px;
border:2px groove yellow;
color:white;
background-color:red;
height:100px;
width:400px;

}
</style>
</head>
<body>
<?php
$name="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = $_POST["name"];
}
?>
<div class="sec1">
 <a href="home.html"><img id=logo src="pluscarelogo.png">


 </div>
<div class="sec2" id="NavBar">
 <a href="home.html">Home</a>
 <a href="appointment.html">Book Appointment</a>
 <a href="medicine.html">Search for Medicine</a>
 <a href="contact.html">Contact Us</a>
 </div>
 <div class="sec3">
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <div id="indiv">
 <h3>Medicine Search</h3>
 <input type="text" placeholder="Enter medicine name" size="35" pattern="^[a-zA-Z0-9])+" name="name">
 <input type="submit" name="submit">
 <br>
 </div>
 </form>
 <br>
 
 <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	
if (isset($_POST['submit']))
{
$conn = new mysqli("localhost", "root", "", "clinic");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT idno, name,price FROM medicine";
$result = $conn->query($sql);
$array=array();
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       
       
		if(substr_count($row["name"],$name)>=1)
		{	
			$array[0]=$row["idno"];
			$array[1]=$row["name"];
			$array[2]=$row["price"];
		}
	}
} else {
    echo "0 results";
}
}
}
?>
<div class=".sec4">
<script>
 var a= '<?php echo $array[0] ?>'; 
 var b= '<?php echo $array[1] ?>';
  var c= '<?php echo $array[2] ?>';
	
    var x = document.createElement("TABLE");
    x.setAttribute("id", "myTable");
    document.body.appendChild(x);

    var y = document.createElement("TR");
    y.setAttribute("id", "myTr");
    document.getElementById("myTable").appendChild(y);
	
	var z = document.createElement("TH");
    var t = document.createTextNode("Medicine Serial Number");
    z.appendChild(t);
    document.getElementById("myTr").appendChild(z);
	
	var z = document.createElement("TH");
    var t = document.createTextNode("Medicine");
    z.appendChild(t);
    document.getElementById("myTr").appendChild(z);
	
	var z = document.createElement("TH");
    var t = document.createTextNode("Cost");
    z.appendChild(t);
    document.getElementById("myTr").appendChild(z);
	
	var y = document.createElement("TR");
    y.setAttribute("id", "myTr1");
    document.getElementById("myTable").appendChild(y);
	
	
    var z = document.createElement("TD");
    var t = document.createTextNode(a);
    z.appendChild(t);
    document.getElementById("myTr1").appendChild(z);
	 
	z = document.createElement("TD");
    t = document.createTextNode(b);
    z.appendChild(t);
    document.getElementById("myTr1").appendChild(z);
	
	z = document.createElement("TD");
    t = document.createTextNode(c);
    z.appendChild(t);
    document.getElementById("myTr1").appendChild(z);
	

</script>
 
 </div>
 
 
 
 </div>
 </body>
</html> 
