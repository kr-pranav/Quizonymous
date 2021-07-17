<?php
    session_start();
    if(isset($_SESSION["user_id"]))
    {    echo    '<script> 
                    alert("Already logged in!"); window.location.href="index.html";
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron text-center">
                <h1>QUIZONYMOUS</h1>
                <p>Gear up your knowledge with us !!</p>
            </div>
            <div class="contanier justify-content-center">
            <form action="../back-end/CheckLogin.php" method="POST">
                <div class="form-group">
                <label for="mail-id">Username:</label>
                <input type="email" class="form-control" placeholder="Enter email-id" name="mail" required>
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" name="pwd" required>
                </div>
                <button type="submit" class="btn btn-success">Login</button>
            </form>
            <br>
            <p>Not an existing user?<a href="Signup.php"> Click here to create an account</a></p>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>