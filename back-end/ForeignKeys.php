<?php
    include __DIR__ . "/../config.php";
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
        echo "COULDN'T CONNECT TO SERVER ".mysqli_error($con);

    $f1='ALTER TABLE ACTIVITY ADD FOREIGN KEY (U_ID) REFERENCES USERINFO(U_ID)';
    $f2='ALTER TABLE CREDENTIALS ADD FOREIGN KEY (U_ID) REFERENCES USERINFO(U_ID)';
    $f3='ALTER TABLE RESULT ADD FOREIGN KEY (U_ID) REFERENCES USERINFO(U_ID)';
    $f4='ALTER TABLE SESSIONINFO ADD FOREIGN KEY (U_ID) REFERENCES USERINFO(U_ID)';
    $f5='ALTER TABLE SESSIONINFO ADD FOREIGN KEY (QUES_ID) REFERENCES QUESTION(QUES_ID)';
    
    if(!mysqli_query($con,$f1))
        echo "ACTIVITY FK NOT CREATED\n";
    if(!mysqli_query($con,$f2))
        echo "CREDENTIALS FK NOT CREATED\n";
    if(!mysqli_query($con,$f3))
        echo "RESULT FK NOT CREATED\n";
    if(!(mysqli_query($con,$f4) && mysqli_query($con,$f5)))
        echo "SESSIONINFO FK NOT CREATED\n";

    mysqli_close($con);
?>