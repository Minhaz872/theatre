<?php
$servername   = "192.168.1.174";
$database = "theatre";
$username = "root";
$password = "Huawei@2023";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
  echo "Connected successfully";
?>