<?php
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    $trig='CREATE OR REPLACE TRIGGER ADDACTIVITY
            AFTER INSERT ON USERINFO
            FOR EACH ROW
            BEGIN
                INSERT INTO ACTIVITY VALUES (NEW.U_ID,1,CURDATE());
                UPDATE CREDENTIALS SET CREDENTIALS.U_ID = NEW.U_ID WHERE CREDENTIALS.U_ID IS NULL;
            END;
            ';
    if(!mysqli_query($con,$trig)) 
        echo mysqli_error($con);
    mysqli_close($con);
?>