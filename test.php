<?php

$username = "task";
$password = "secret";
function checkMySql() {
    $conn = mysqli_connect(getenv('DB_HOST'), $username, $password);
    if(!$conn){
        echo "Wait MySQL Connect....";
        sleep(3);
        checkMySql();
    }

 }

 checkMySql();
?>