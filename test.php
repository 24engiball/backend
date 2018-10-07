<?php
$servername = $DB_HOST;
$username = "task";
$password = "secret";

// Create connection
$conn = new mysqli(getenv('DB_HOST'), $username, $password);

do{
echo "Wait MySQL Connect....";
sleep(3);
}
while(!$conn->ping());
echo "MySQL Connected!!!";
?>