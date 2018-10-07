<?php

$username = "task";
$password = "secret";

// Create connection
echo "dbhost : " . getenv('DB_HOST');
$conn = mysqli_connect(getenv('DB_HOST'), $username, $password);

do{
echo "Wait MySQL Connect....";
sleep(3);
}
while(!$conn);
echo "MySQL Connected!!!";
?>