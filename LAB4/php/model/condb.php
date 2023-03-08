<?php
$servername = "db";
$database = "db_test";
$username = "root";
$password = "1234";
 
    // Create connection
 
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
 
if (!$conn) {
 
    die("Connection failed: " . mysqli_connect_error($conn));
 
}
echo "Connected successfully";
// 
?>
  

