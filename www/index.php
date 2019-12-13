<?php
// phpinfo();
//// Create connection
$host_db = "dockerdb";
$username = "admin";
$password = "1234";
$database = "database";
$conn = new mysqli($host_db, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
