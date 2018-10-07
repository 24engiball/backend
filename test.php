<?php

function checkMySql() {
$username = "task";
$password = "secret";
    $conn = mysqli_connect(getenv('DB_HOST'), $username, $password,'task');
    if(!$conn){
        echo "Wait MySQL Connect....";
        sleep(3);
        mysqli_close($conn);
        checkMySql();
    }else{

        shell_exec('./test2.sh');
    }

 }

 checkMySql();
?>