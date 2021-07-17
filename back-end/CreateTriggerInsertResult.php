<?php
    include __DIR__ . "/../config.php";

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {   echo "UNABLE TO CONNECT SERVER. TRY AGAIN.\n";
        exit();
    }

    $trig='CREATE OR REPLACE TRIGGER insertresult
           BEFORE DELETE ON SESSIONINFO
            FOR EACH ROW
            BEGIN
                DECLARE userid INT(10);
                SELECT DISTINCT(u_id) INTO userid FROM SESSIONINFO;
                CALL updateresult(userid);
            END;
            ';
    
    if(!mysqli_query($con,$trig))
        echo mysqli_error($con);

    mysqli_close($con);
?>