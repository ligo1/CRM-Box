<?php
$servername = "10.20.58.83";
$username = "CrmBoxUser";
$password = "A2cK5_pzY@xj_ZsX";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>