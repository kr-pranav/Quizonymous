<?php   
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);

    if(!$con)
        echo "COULDN'T CONNECT TO DATABASE SERVER".mysqli_error($con);

    $sqlc='CREATE TABLE CREDENTIALS(U_ID INT(10) UNIQUE KEY, MAIL VARCHAR(50) UNIQUE KEY, PWD VARCHAR(100))';

    if(mysqli_query($con,$sqlc))
        echo "CREDENTIALS TABLE CREATED \n";
    else
        echo "CREDENTIALS TABLE NOT CREATED\n";

    mysqli_close($con);
?>
    