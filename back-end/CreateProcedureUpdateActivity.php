<?php
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con){
        echo mysqli_error($con);
        exit();
    }
    $procedure='CREATE OR REPLACE PROCEDURE UPDATEACTIVITY(IN USERID INT(10))
                BEGIN
                        DECLARE LDATE   DATE;
                        DECLARE RDATE   DATE;
                        SET RDATE=CURRENT_DATE();
                        SELECT ACTIVITY.LAST_VISIT INTO LDATE FROM ACTIVITY WHERE ACTIVITY.U_ID = USERID;
                        IF LDATE <> RDATE THEN
                            UPDATE ACTIVITY SET ACTIVITY.CREDIT_PTS=ACTIVITY.CREDIT_PTS+1,ACTIVITY.LAST_VISIT=RDATE WHERE ACTIVITY.U_ID = USERID;
                        END IF;
                END
                ';
    if(!mysqli_query($con,$procedure))
        echo mysqli_error($con);
    mysqli_close($con);
?>