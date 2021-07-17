<?php
    include './config.php';

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword);
    if(!$con)
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);

    $cr='CREATE DATABASE QUIZZER';

    if(mysqli_query($con,$cr))
        echo "DATABASE CREATED\n";
    else
        echo "ERROR IN CREATING DATABASE".mysqli_error($con);

    mysqli_close($con);
?>