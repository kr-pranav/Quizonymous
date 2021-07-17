<?php 
    session_start();
    $_SESSION["level"]=1;
    if(isset($_SESSION["user_id"]))
    {    
        echo '<script> 
                alert("Already signed up!"); window.location.href="index.html";
             </script>';  
    }
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>QUIZZER</title>
        <meta charset="UTF-8">
        <meta name="description" content="Online quizzing site">
        <meta name="keywords" content="quiz,tech quiz"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./images/icon.jpg" type="image/icon">
        <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
    </head>
    <body>
        <div class="container">
            <div class="jumbotron text-center">
                <h1>QUIZONYMOUS</h1>
                <p>Create your account now !! </p>
            </div>
            <div class="container justify-content-center">
            <form action="../back-end/InsertUser.php" method="POST">
                <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control"  placeholder="Enter Name" name="name" required>
                </div>

                <div class='form-group'>
                <label for="gender">Gender: </label>
                <select name="gender" class="selectpicker" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                    <option value="Prefernottosay">Prefer not to say</option>
                </select>
                </div>

                <div class='form-group'>
                <label for="country">Country:</label>
                <select class="selectpicker countrypicker" data-flag="true" class="form-control" name="country" required></select>
                </div>

                <div class="form-group">
                <label for="phno"><b>Phone Number</b></label>
                <input type="text" placeholder="Enter Phone Number" name="phno" class="form-control" required>
                </div>

                <div class="form-group">
                <label for="mail-id">Username:</label>
                <input type="email" class="form-control" placeholder="Enter email-id" name="email" required>
                </div>
                
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="pwd" required>
                </div>

                <div class="form-group">
                <label for="pwd-repeat">Retype Password:</label>
                <input type="password" class="form-control" placeholder="Retype Password" name="pwd-repeat" required><br>
                </div>

                <button type="submit" class="btn btn-success ">Register</button>
            </form>
            <br>
            <p>Alredy a user?<a href="Login.php"> Click here to Login now</a></p>
            </div>
        </div>
        <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script> 
        <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script> 
    </body>
</html>
