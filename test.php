<?php
function test(){
    echo "test";
    sleep(3);
    test();
}
function checkMySql() {
$username = "task";
$password = "secret";
    $conn = mysqli_connect(getenv('DB_HOST'), $username, $password,'task');
    if(!$conn){
        echo "Wait MySQL Connect....";
        sleep(3);
        checkMySql();
    }else{
        mysqli_close($conn);

       // shell_exec('./test2.sh');
    }

 }
 test();
// checkMySql();
?>