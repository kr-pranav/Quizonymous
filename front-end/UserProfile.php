<?php
    include '../config.php';
    session_start();
    if(!isset($_SESSION["user_id"]))
    {    
        echo  '<script> 
                    alert("Kindly login to view your profile!"); window.location.href="index.html";
              </script>';  
    }

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'couldn\'t connect to server'.mysqli_error($con);
        exit();
    }

    $q1 = 'SELECT * FROM currentuser';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
        <meta charset="UTF-8">
        <meta name="description" content="Online quizzing site">
        <meta name="keywords" content="quiz,tech quiz"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./images/icon.jpg" type="image/icon">
        <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />      
    </head>
    <body class="container">
            <div class="jumbotron  ">
                <h1 class="text-center">QUIZONYMOUS</h1>
                <h3 class="text-center">VIEW YOUR PROFILE !!</h3><br>
                <div class="d-flex flex-row justify-content-center"></div>
            </div>
        <table class = "table table-striped table-hover table-bordered center" style="width:50%; margin-left:auto; margin-right:auto;">
            <thead>
                <th scope="col" colspan="2" style="text-align:center;"> PROFILE &nbsp &nbsp &nbsp <img src="./images/dp.jpg" alt="NA" height="100px"></th>
            </thead>
            <tbody>
            <tr>
                <th scope="col"> Name</th>
                <td>
                    <?php 
                        $res1=mysqli_query($con,$q1);
                        $arr1=mysqli_fetch_assoc($res1);
                        echo $arr1["u_name"];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col"> Gender</th>
                <td>
                    <?php 
                        echo $arr1["gender"];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col"> E-mail ID</th>
                <td>
                    <?php 
                        echo $arr1["mail"];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col"> Mobile Number</th>
                <td>
                    <?php 
                        echo $arr1["ph_no"];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col"> Country </th>
                <td>
                    <?php 
                        echo $arr1["country"];
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col"> Credit Points </th>
                <td>
                    <?php 
                        echo $arr1["credit_pts"];
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="../back-end/SessionDestroy.php" class="btn btn-danger btn-lg">Logout</a>
        </div>
        <div>
            <br><h4 class="text-center">Click<a href="index.html">  here  </a> to go back to HOME page</h4><br><br>
        </div>
        <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script> 
        <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script> 
    </body>
</html>
<?php
    mysqli_close($con);
?>
