<?php
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
        echo "FAILED TO CONNECT TO SERVER .".mysqli_error($con);

    $c1='ALTER TABLE CREDENTIALS ADD CONSTRAINT EMAILCHK CHECK (MAIL LIKE "_%@_%._%" )';
    $c2='ALTER TABLE USERINFO ADD CONSTRAINT GENCHK CHECK (GENDER IN ("M","F","O","P"))';
    $c3='ALTER TABLE QUESTION ADD CONSTRAINT LVLCHECK CHECK (DIFFICULTY IN (1,2,3))';
    
    if(!mysqli_query($con,$c1))
        echo "EMAILCHK NOT CREATED\n";
    if(!mysqli_query($con,$c2))
        echo "GENCHK NOT CREATED\n";
    if(!mysqli_query($con,$c3))
        echo "LVLCHK NOT CREATED\n";


    mysqli_close($con);
?>