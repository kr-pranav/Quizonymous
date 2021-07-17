<?php
    session_start();
    include '../config.php';
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'couldn\'t connect to server'.mysqli_error($con);
        exit();
    }
    if($_SESSION["pin"]==$_POST["otp"]) 
    {
        $insu="INSERT INTO USERINFO (U_NAME,PH_NO,COUNTRY,GENDER) VALUES ('{$_SESSION["name"]}','{$_SESSION["ph"]}','{$_SESSION["country"]}','{$_SESSION["gen"]}')";
        $insc="INSERT INTO CREDENTIALS (MAIL,PWD) VALUES ('{$_SESSION["mail"]}','{$_SESSION["pwd"]}')";
        if(!(mysqli_query($con,$insc) && mysqli_query($con,$insu)))
            echo "ERROR !! TRY AGAIN\n";
        else{    
                echo '<script> 
                        alert("Account created successfully !!"); window.location.href="../front-end/index.html";
                    </script>';
            }
    }
    else
    {
        echo '<script> 
                alert("Oops... OTP IS INCORRECT !! Try Again"); window.location.href="../front-end/Signup.php";
             </script>';
    }
    unset($_SESSION["pin"]);
    mysqli_close($con);
?>