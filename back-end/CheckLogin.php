<?php
    session_start();
    include '../config.php';
    $m_id=$_POST["mail"];
    $pwd=$_POST["pwd"];
    $m_id=trim($m_id);
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {   echo "UNABLE TO CONNECT SERVER. TRY AGAIN.\n";
        exit();
    }

    $sel="SELECT u_id FROM CREDENTIALS WHERE mail='$m_id'";
    $result = mysqli_query($con,$sel);
    if (mysqli_num_rows($result) != 0){
        $sel1 = "SELECT pwd  FROM CREDENTIALS WHERE mail='$m_id'";
        $query = mysqli_query($con,$sel1);
        $cpwd = mysqli_fetch_assoc($query);
        if(password_verify($pwd,$cpwd["pwd"])){
            echo '<script>
                    alert("LOGIN SUCCESSFUL !!");
                    window.location.href="../front-end/index.html";
                  </script>';
            $obj=mysqli_fetch_assoc($result);
            $_SESSION["user_id"]=$obj["u_id"];
            $u = $_SESSION["user_id"];
            $exec = "CALL UPDATEACTIVITY($u)";
            mysqli_query($con,$exec);
            include 'CreateViewProfile.php';
            header("location: ../front-end/index.html");
        }
        else{
            echo '<script>
                    alert("PASSWORD INCORRECT !! Kindly Retry");
                    window.location.href="../front-end/Login.php";
                  </script>';
            session_destroy();
        }
    }

  else{
    echo '<script>
            alert("Not an existing user. Kindly create an account !!");
            window.location.href="../front-end/Signup.php";
          </script>';
    session_destroy();
 
}

    mysqli_close($con);
?>

