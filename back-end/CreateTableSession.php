<?php   
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    if(!$con){
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);
        exit();
    }

    $sqls='CREATE TABLE SESSIONINFO (U_ID INT(10), DOMAIN VARCHAR(20), DIFFICULTY INT(10), QUES_ID INT(10), QUES_SNO INT PRIMARY KEY, USER_ANS CHAR(1), RESULT INT, FINISHED_TIME TIME)';

    if(mysqli_query($con,$sqls))
        echo "SESSION TABLE CREATED \n";
    else
        echo "SESSION TABLE NOT CREATED\n";
    
    mysqli_close($con);
?>