<?php
 error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mid_marks";
$current_month = date("F");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>