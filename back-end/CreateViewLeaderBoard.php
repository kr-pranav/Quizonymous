<?php
    $vw = "CREATE OR REPLACE VIEW leaderboard 
           AS SELECT USERINFO.u_name, RESULT.country, RESULT.easy_score, RESULT.med_score, RESULT.hard_score FROM 
           RESULT, USERINFO WHERE RESULT.u_id = USERINFO.u_id AND RESULT.domain = '{$_SESSION["domain"]}' ORDER BY (hard_score+med_score+easy_score) DESC,
           RESULT.hard_score DESC, RESULT.med_score DESC, RESULT.easy_score DESC, RESULT.hard_time DESC, RESULT.med_time DESC, RESULT.easy_time DESC  LIMIT 10" ;

    $query=mysqli_query($con,$vw);
    if($query)
                    ;
    else
        echo mysqli_error($con);
?>