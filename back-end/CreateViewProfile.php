<?php
    include '../config.php';

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con){
        echo mysqli_error($con);
        exit();
    }

    $vw = "CREATE OR REPLACE VIEW CURRENTUSER AS SELECT USERINFO.u_name,USERINFO.ph_no,USERINFO.country,USERINFO.gender,CREDENTIALS.mail,
    ACTIVITY.credit_pts FROM USERINFO INNER JOIN CREDENTIALS INNER JOIN ACTIVITY ON USERINFO.u_id={$_SESSION['user_id']} AND CREDENTIALS.u_id=USERINFO.u_id 
    AND ACTIVITY.u_id={$_SESSION['user_id']}";

    $query=mysqli_query($con,$vw);
    if($query)
                        ;
    else
        echo mysqli_error($query);

    mysqli_close($con);
?>
