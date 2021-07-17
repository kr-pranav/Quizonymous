<?php   
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    if(!$con)
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);

    $sqlr='CREATE TABLE RESULT (U_ID INT(10), DOMAIN VARCHAR(20), COUNTRY VARCHAR(20), EASY_SCORE INT DEFAULT 0, MED_SCORE INT DEFAULT 0, HARD_SCORE INT DEFAULT 0, 
           EASY_TIME TIME, MED_TIME TIME, HARD_TIME TIME)';

    if(mysqli_query($con,$sqlr))
        echo "RESULT TABLE CREATED \n";
    else
        echo "RESULT TABLE NOT CREATED\n";
    
    mysqli_close($con);
?> 