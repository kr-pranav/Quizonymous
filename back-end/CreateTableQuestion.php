<?php   
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    if(!$con)
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);

    $sqlq='CREATE TABLE QUESTION (QUES_ID INT(10) AUTO_INCREMENT PRIMARY KEY, DOMAIN VARCHAR(20), QUESTION VARCHAR(500), OPT_A VARCHAR(30), OPT_B VARCHAR(30), 
           OPT_C VARCHAR(30), OPT_D VARCHAR(30), CRCT_ANS CHAR(1), DIFFICULTY INT, FREQUENCY INT DEFAULT 0)';

    if(mysqli_query($con,$sqlq))
        echo "QUESTION TABLE CREATED \n";
    else
        echo "QUESTION TABLE NOT CREATED\n";
    
    mysqli_close($con);
?> 