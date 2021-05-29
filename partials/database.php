<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "hotel";

//connection
$conn = new mysqli($servername, $username, $password, $db_name);

//check
if ($conn && $conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>