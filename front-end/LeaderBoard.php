<?php
    include '../config.php';

    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'couldn\'t connect to server'.mysqli_error($con);
        exit();
    }
    include '../back-end/CreateViewLeaderBoard.php';
    $q1 = 'SELECT * FROM leaderboard';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Leader_Board</title>
        <meta charset="UTF-8">
        <meta name="description" content="Online quizzing site">
        <meta name="keywords" content="quiz,tech quiz"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./images/icon.jpg" type="image/icon">
        <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css" type="text/css" />
        <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
        
    </head>
    <body class="container">
            <div class="jumbotron  ">
                <h1 class="text-center">QUIZONYMOUS</h1>
                <h3 class="text-center">LEADERBOARD WITH TOP 10 PERFORMERS !!</h3><br>
                <div class="d-flex flex-row justify-content-center"></div>
            </div>
        <table class = "table table-dark table-striped table-hover table-bordered center ">
            <thead>
            <tr>
                <th scope = "col" class="text-center"> RANK # </th>
                <th scope = "col" > USERNAME </th>
                <th scope = "col"> COUNTRY </th>
                <th scope = "col"> EASY SCORE [ /10]</th>
                <th scope = "col"> MEDIUM SCORE [ /20]</th>
                <th scope = "col"> HARD SCORE [ /30]</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="col" class="text-center"> 1</th>
                <td>
                    <?php 
                        $res1=mysqli_query($con,$q1);
                        if(!$res1) mysqli_error($con);
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"]))
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 2</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 3</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-" ; 
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 4</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 5</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-" ;  
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 6</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 7</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 8</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 9</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";;
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="col" class="text-center"> 10</th>
                <td>
                    <?php 
                        $arr1=mysqli_fetch_assoc($res1);
                        if(isset($arr1["u_name"]))
                            echo $arr1["u_name"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php
                        if(isset($arr1["country"])) 
                            echo $arr1["country"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["easy_score"]))
                            echo $arr1["easy_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["med_score"]))
                            echo $arr1["med_score"];
                        else
                            echo "-";
                    ?>
                </td>
                <td>
                    <?php 
                        if(isset($arr1["hard_score"]))
                            echo $arr1["hard_score"];
                        else
                            echo "-";
                    ?>
                </td>
            </tr>
            </tbody>
        </table>
        <div>
            <h4  class="text-center">Click<a href="../front-end/index.html">  here  </a> to go back to HOME page</h4><br><br>
        </div>
        <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script> 
        <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script> 
        <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script> 
    </body>
</html>