<?php
//$con=mysqli_connect("localhost","","","");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "craftzae_craftcrazy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

