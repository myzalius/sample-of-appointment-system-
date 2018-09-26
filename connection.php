<?php
//connection to the database
$host="localhost";
$username="root";
$db_password="";
$database="appointment";

// Create connection
$conn = mysqli_connect($host, $username, $db_password,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully';




?>