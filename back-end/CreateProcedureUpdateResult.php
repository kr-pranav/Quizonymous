<?php
    include __DIR__ . "/../config.php";

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con){
        echo mysqli_error($con);
        exit();
    }

    $procedure='CREATE OR REPLACE PROCEDURE updateresult(IN userid INT(10))
                BEGIN
                    DECLARE finished INTEGER DEFAULT 0;
                    DECLARE temp INTEGER(10) DEFAULT 0;                   
                    DECLARE con VARCHAR(20);
                    DECLARE dom VARCHAR(20);                   
                    DECLARE dif INTEGER(10); 
                    DECLARE new_score INTEGER(10);
                    DECLARE tim INTEGER(10);
                    DECLARE exist_score INTEGER(10);
                    DECLARE x INTEGER(10) DEFAULT 0;
                    
                    DECLARE curResult
                        CURSOR FOR
                            SELECT u_id FROM RESULT;

                    DECLARE CONTINUE HANDLER
                    FOR NOT FOUND SET finished = -1;
                    
                    SELECT country INTO con FROM USERINFO WHERE USERINFO.u_id=userid ;
                    SELECT domain INTO dom FROM SESSIONINFO WHERE SESSIONINFO.ques_sno=1;
                    SELECT difficulty INTO dif FROM SESSIONINFO WHERE SESSIONINFO.ques_sno=1;
                    SELECT SUM(RESULT) INTO new_score FROM SESSIONINFO WHERE SESSIONINFO.u_id=userid;
                    SELECT finished_time INTO tim FROM SESSIONINFO WHERE SESSIONINFO.ques_sno=1;
                    
                    if tim > 30 THEN
                        SET tim = 30;
                    END IF;
                    
                    SELECT COUNT(*) INTO x FROM RESULT WHERE RESULT.u_id = userid;
                    IF x = 0 THEN
                            INSERT INTO RESULT(u_id,country,domain) VALUES(userid,con,dom);
                            IF dif = 1 THEN
                                UPDATE RESULT SET easy_score = new_score WHERE RESULT.u_id = userid;
                                UPDATE RESULT SET easy_time = tim WHERE RESULT.u_id = userid;
                            END IF;
                            IF dif = 2 THEN
                                UPDATE RESULT SET med_score = new_score WHERE RESULT.u_id = userid;
                                UPDATE RESULT SET med_time = tim WHERE RESULT.u_id = userid;
                            END IF;
                            IF dif = 3 THEN
                                UPDATE RESULT SET hard_score = new_score WHERE RESULT.u_id = userid;
                                UPDATE RESULT SET hard_time = tim WHERE RESULT.u_id = userid;
                            END IF;
                    END IF;

                    SET x = 0;

                    OPEN curResult;

                    updateResult: LOOP
                        FETCH curResult INTO temp;
                        IF finished = -1 THEN 
                            LEAVE updateResult;
                        END IF;

                        IF temp = userid THEN
                            IF dif = 1 THEN
                                SELECT easy_score INTO exist_score FROM RESULT WHERE RESULT.u_id = temp;
                                IF new_score > exist_score THEN
                                    UPDATE RESULT SET easy_score = new_score WHERE RESULT.u_id = userid;
                                    UPDATE RESULT SET easy_time = tim WHERE RESULT.u_id = userid;
                                END IF;
                            END IF;
                            IF dif = 2 THEN
                                SELECT med_score INTO exist_score FROM RESULT WHERE RESULT.u_id = temp;
                                IF new_score > exist_score THEN
                                    UPDATE RESULT SET med_score = new_score WHERE RESULT.u_id = userid;
                                    UPDATE RESULT SET med_time = tim WHERE RESULT.u_id = userid;
                                END IF;
                            END IF;
                            IF dif = 3 THEN
                                SELECT hard_score INTO exist_score FROM RESULT WHERE RESULT.u_id = temp;
                                IF new_score > exist_score THEN
                                    UPDATE RESULT SET hard_score = new_score WHERE RESULT.u_id = userid;
                                    UPDATE RESULT SET hard_time = tim WHERE RESULT.u_id = userid;
                                END IF;
                            END IF;  
                        END IF;
                    END LOOP updateResult;
                    
                    CLOSE curResult;

                END;
                ';

    if(!mysqli_query($con,$procedure))
        echo mysqli_error($con);
    
    mysqli_close($con);
?>