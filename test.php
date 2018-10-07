<?php
function test(){
    echo "test";
    sleep(3);
    test();
}
function checkMySql() {
$username = "task";
$password = "secret";
try{
    $conn = new mysqli(getenv('DB_HOST'), $username, $password);
    if($conn->connect_error){
        echo "Wait MySQL Connect....";
        sleep(3);
        checkMySql();
    }else{
        mysqli_close($conn);

        shell_exec('./test2.sh');
    }
}catch(Exception $e){
    echo "Wait MySQL Connect..." . $e;
    checkMySql();
}

 }
 //test();
 checkMySql();
?>