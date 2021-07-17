<?php   
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    if(!$con)
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);

    $sqlu='CREATE TABLE USERINFO (U_ID INT(10) AUTO_INCREMENT PRIMARY KEY, U_NAME VARCHAR(20), PH_NO VARCHAR(13), COUNTRY VARCHAR(20), GENDER CHAR(1))';
    
    if(mysqli_query($con,$sqlu))
        echo "USER TABLE CREATED \n";
    else
        echo "USER TABLE NOT CREATED\n";
    
    mysqli_close($con);
?>