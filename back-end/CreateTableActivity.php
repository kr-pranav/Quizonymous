<?php   
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    if(!$con)
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);

    $sqla='CREATE TABLE ACTIVITY (U_ID INT(10), CREDIT_PTS INT DEFAULT 0, LAST_VISIT DATE)';

    if(mysqli_query($con,$sqla))
        echo "ACTIVITY TABLE CREATED \n";
    else
        echo "ACTIVITY TABLE NOT CREATED\n";

    mysqli_close($con);
?>