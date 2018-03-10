<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
$data = json_decode(file_get_contents('./data.json'));
echo "<pre>";
print_r( $data );
echo "</pre>";

