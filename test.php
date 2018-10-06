<?php
$servername = $DB_HOST;
$username = "task";
$password = "secret";

// Create connection
$conn = new mysqli(getenv('DB_HOST'), $username, $password);

// Check connection
if ($conn->connect_error) {
    echo "0";
}
echo 1;
?>