<?php
    include '../config.php';
    session_start();
    $_SESSION["name"]=$_POST["name"];
    $_SESSION["gen"]=$_POST["gender"];
    $_SESSION["ph"]=$_POST["phno"];
    $_SESSION["mail"]=$_POST["email"];
    $_SESSION["country"]=$_POST["country"];
    $_SESSION["pwd"]=$_POST["pwd"];
    $rpwd=$_POST["pwd-repeat"];

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {   echo "UNABLE TO CONNECT SERVER.";
        echo ' <a href="../front-end/Signup.php">TRY AGAIN</a><br> ';
        exit();
    }
    $sel="SELECT MAIL FROM CREDENTIALS WHERE MAIL='{$_SESSION["mail"]}'";
    $result=mysqli_query($con,$sel);
    if(!$result){
        echo mysqli_error($con);
        exit();
    }
    if(mysqli_num_rows($result)==0)
    {
        if($_SESSION["pwd"]==$rpwd)
        {   if($_SESSION["gen"]=="Male")
                $_SESSION["gen"]="M";
            elseif ($_SESSION["gen"]=="Female")
                $_SESSION["gen"]="F";
            elseif($_SESSION["gen"]=="Other")
                $_SESSION["gen"]="O";
            elseif($_SESSION["gen"]=="Prefernottosay")
                $_SESSION["gen"]="P";
            $pass=password_hash($_SESSION["pwd"],PASSWORD_DEFAULT);
            if(!password_verify($_SESSION["pwd"],$pass))
                exit();
            $_SESSION["pwd"]=$pass;
            include '../PHP-mailer/mail.php';
            echo'
<!DOCTYPE html>
<html>
<head>
    <title>QUIZZER</title>
    <meta charset="UTF-8">
    <meta name="description" content="Online quizzing site">
    <meta name="keywords" content="quiz,tech quiz"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../front-end/images/icon.jpg" type="image/icon">
    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />     
</head>
<body class="container">
        <div class="jumbotron text-center">
        <h1>QUIZONYMOUS</h1>
        <p>Create your account now !! </p>
        </div>
        <div class="contanier justify-content-center">
            <h4>OTP has been sent to your registered E-mail ID</h4><br>
            <form action="InsertUserConfirm.php" method="POST">
                <div class="form-group">
                    <label for="otp">Enter your OTP : &nbsp </label> 
                    <input type="text" name="otp" placeholder="Enter your OTP" required/>
                </div>
                <br>
                &emsp; &emsp; &emsp; &emsp;
                <button type="submit" class="btn btn-warning">Confirm</button>
            </form>
        </div>
        <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script> 
        <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script> 
</body>
</html>';
        }
        else
        {   
            echo '<script> 
                        alert("PASSWORD RETYPED INCORRECTLY !! Kindly Retry"); window.location.href="../front-end/Signup.php";
                    </script>';
        }
    }
    else
    {
        echo "AN ACCOUNT ALREADY EXISTS UNDER THE SAME E-MAIL ID !!<br><br>";
        echo '
                TRY TO LOGIN INSTEAD <a href="../front-end/Login.php">Go to login page</a><br><br>
                <a href="../front-end/Signup.php">Try again to signup</a><br><br>
            ';
        exit();
    }
    mysqli_close($con);
?>
