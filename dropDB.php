<?php 
    include './config.php';
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo mysqli_error($con);
    }
    $drop="DROP DATABASE $database";
    $exec=mysqli_query($con,$drop);
    if(!$exec)
        echo mysqli_error($con);
    else
        echo 'DATABASE DROPPED SUCCESSFULLY!';
    mysqli_close($con);
?>