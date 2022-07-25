<?php
$servername = "localhost";
$dbname = "daisyhousekeepers";
$username = "root";
$password = "";

// connection creation
$conn = new mysqli($servername, $username, $password);

// connection check
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
