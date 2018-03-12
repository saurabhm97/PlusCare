<?php
$servername = "localhost";
$username = "id2517850_pluscare";
$password = "123456789";
$dbname= "id2517850_pluscare";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>	