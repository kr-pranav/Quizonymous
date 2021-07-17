<?php
    include '../config.php';
    session_start();
    if(!isset($_SESSION["user_id"]))
    {    echo    '<script> 
                    alert("Kindly login/register before quizzing!"); window.location.href="./Login.php";
                  </script>';  
    }
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'couldn\'t connect to server'.mysqli_error($con);
        exit();
    }
    $q1='SELECT QUES_ID,QUESTION,OPT_A,OPT_B,OPT_C,OPT_D,CRCT_ANS FROM QUESTION WHERE DOMAIN="APTITUDE" AND DIFFICULTY=2 ';
    $order=' ORDER BY FREQUENCY LIMIT 1';
    $q2='UPDATE QUESTION SET FREQUENCY=FREQUENCY+1 WHERE QUES_ID=';
    $_SESSION["starttime"]=time();
    $_SESSION["level"]=2;
    $_SESSION["domain"]= 'aptitude';
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>Aptitude_medium</title>
        <meta charset="UTF-8">
        <meta name="description" content="Online quizzing site">
        <meta name="keywords" content="quiz,tech quiz"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="./images/icon.jpg" type="image/icon">
        <link rel="stylesheet" href="./Timer.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
            <div class="jumbotron  ">
                <h1 class="text-center" >QUIZONYMOUS</h1>
                <h3 class="text-center" >Aptitude - Level 2 (MEDIUM)</h3><br>
                <div class="d-flex flex-row justify-content-center" id="app"></div>
            </div>
            <div class="container justify-content-center">
                <form method="POST" action="../back-end/EvaluateAnswer.php" id="myForm">
                <div class="form-group">
                    <p name="q1" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr1=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr1["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "1. ".$arr1["QUESTION"];
                            $_SESSION["q1"]=$arr1["QUES_ID"];
                            $_SESSION["crct1"]=$arr1["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a1" value="A" />
                    <label for="a1"><?php echo $arr1["OPT_A"]; ?></label><br>
                    <input type="radio" name="a1" value="B" />
                    <label for="a1"><?php echo $arr1["OPT_B"]; ?></label><br>
                    <input type="radio" name="a1" value="C" />
                    <label for="a1"><?php echo $arr1["OPT_C"]; ?></label><br>
                    <input type="radio" name="a1" value="D" />
                    <label for="a1"><?php echo $arr1["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q2" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr2=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr2["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "2. ".$arr2["QUESTION"];
                            $_SESSION["q2"]=$arr2["QUES_ID"];
                            $_SESSION["crct2"]=$arr2["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a2" value="A" />
                    <label for="a2"><?php echo $arr2["OPT_A"]; ?></label><br>
                    <input type="radio" name="a2" value="B" />
                    <label for="a2"><?php echo $arr2["OPT_B"]; ?></label><br>
                    <input type="radio" name="a2" value="C" />
                    <label for="a2"><?php echo $arr2["OPT_C"]; ?></label><br>
                    <input type="radio" name="a2" value="D" />
                    <label for="a2"><?php echo $arr2["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q3" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr3=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr3["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "3. ".$arr3["QUESTION"];
                            $_SESSION["q3"]=$arr3["QUES_ID"];
                            $_SESSION["crct3"]=$arr3["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a3" value="A" />
                    <label for="a3"><?php echo $arr3["OPT_A"]; ?></label><br>
                    <input type="radio" name="a3" value="B" />
                    <label for="a3"><?php echo $arr3["OPT_B"]; ?></label><br>
                    <input type="radio" name="a3" value="C" />
                    <label for="a3"><?php echo $arr3["OPT_C"]; ?></label><br>
                    <input type="radio" name="a3" value="D" />
                    <label for="a3"><?php echo $arr3["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q4" class="form-control">
                        <?php 
                           $query1=$q1.$order;
                           $res1=mysqli_query($con,$query1);
                           $arr4=mysqli_fetch_assoc($res1);
                           $query2=$q2.$arr4["QUES_ID"];
                           $res2=mysqli_query($con,$query2);
                           echo "4. ".$arr4["QUESTION"];
                           $_SESSION["q4"]=$arr4["QUES_ID"];
                           $_SESSION["crct4"]=$arr4["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a4" value="A" />
                    <label for="a4"><?php echo $arr4["OPT_A"]; ?></label><br>
                    <input type="radio" name="a4" value="B" />
                    <label for="a4"><?php echo $arr4["OPT_B"]; ?></label><br>
                    <input type="radio" name="a4" value="C" />
                    <label for="a4"><?php echo $arr4["OPT_C"]; ?></label><br>
                    <input type="radio" name="a4" value="D" />
                    <label for="a4"><?php echo $arr4["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q5" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr5=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr5["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "5. ".$arr5["QUESTION"];
                            $_SESSION["q5"]=$arr5["QUES_ID"];
                            $_SESSION["crct5"]=$arr5["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a5" value="A" />
                    <label for="a5"><?php echo $arr5["OPT_A"]; ?></label><br>
                    <input type="radio" name="a5" value="B" />
                    <label for="a5"><?php echo $arr5["OPT_B"]; ?></label><br>
                    <input type="radio" name="a5" value="C" />
                    <label for="a5"><?php echo $arr5["OPT_C"]; ?></label><br>
                    <input type="radio" name="a5" value="D" />
                    <label for="a5"><?php echo $arr5["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q6" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr6=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr6["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "6. ".$arr6["QUESTION"];
                            $_SESSION["q6"]=$arr6["QUES_ID"];
                            $_SESSION["crct6"]=$arr6["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a6" value="A" />
                    <label for="a6"><?php echo $arr6["OPT_A"]; ?></label><br>
                    <input type="radio" name="a6" value="B" />
                    <label for="a6"><?php echo $arr6["OPT_B"]; ?></label><br>
                    <input type="radio" name="a6" value="C" />
                    <label for="a6"><?php echo $arr6["OPT_C"]; ?></label><br>
                    <input type="radio" name="a6" value="D" />
                    <label for="a6"><?php echo $arr6["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q7" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr7=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr7["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "7. ".$arr7["QUESTION"];
                            $_SESSION["q7"]=$arr7["QUES_ID"];
                            $_SESSION["crct7"]=$arr7["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a7" value="A" />
                    <label for="a7"><?php echo $arr7["OPT_A"]; ?></label><br>
                    <input type="radio" name="a7" value="B" />
                    <label for="a7"><?php echo $arr7["OPT_B"]; ?></label><br>
                    <input type="radio" name="a7" value="C" />
                    <label for="a7"><?php echo $arr7["OPT_C"]; ?></label><br>
                    <input type="radio" name="a7" value="D" />
                    <label for="a7"><?php echo $arr7["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q8" class="form-control">
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr8=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr8["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "8. ".$arr8["QUESTION"];
                            $_SESSION["q8"]=$arr8["QUES_ID"];
                            $_SESSION["crct8"]=$arr8["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a8" value="A" />
                    <label for="a8"><?php echo $arr8["OPT_A"]; ?></label><br>
                    <input type="radio" name="a8" value="B" />
                    <label for="a8"><?php echo $arr8["OPT_B"]; ?></label><br>
                    <input type="radio" name="a8" value="C" />
                    <label for="a8"><?php echo $arr8["OPT_C"]; ?></label><br>
                    <input type="radio" name="a8" value="D" />
                    <label for="a8"><?php echo $arr8["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q9" class="form-control" >
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr9=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr9["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "9. ".$arr9["QUESTION"];
                            $_SESSION["q9"]=$arr9["QUES_ID"];
                            $_SESSION["crct9"]=$arr9["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a9" value="A" />
                    <label for="a9"><?php echo $arr9["OPT_A"]; ?></label><br>
                    <input type="radio" name="a9" value="B" />
                    <label for="a9"><?php echo $arr9["OPT_B"]; ?></label><br>
                    <input type="radio" name="a9" value="C" />
                    <label for="a9"><?php echo $arr9["OPT_C"]; ?></label><br>
                    <input type="radio" name="a9" value="D" />
                    <label for="a9"><?php echo $arr9["OPT_D"]; ?></label><br>
                </div>
                <div class="form-group">
                    <p name="q10" class="form-control" >
                        <?php 
                            $query1=$q1.$order;
                            $res1=mysqli_query($con,$query1);
                            $arr10=mysqli_fetch_assoc($res1);
                            $query2=$q2.$arr10["QUES_ID"];
                            $res2=mysqli_query($con,$query2);
                            echo "10. ".$arr10["QUESTION"];
                            $_SESSION["q10"]=$arr10["QUES_ID"];
                            $_SESSION["crct10"]=$arr10["CRCT_ANS"];
                        ?>
                    </p>
                    <input type="radio" name="a10" value="A" />
                    <label for="a10"><?php echo $arr10["OPT_A"]; ?></label><br>
                    <input type="radio" name="a10" value="B" />
                    <label for="a10"><?php echo $arr10["OPT_B"]; ?></label><br>
                    <input type="radio" name="a10" value="C" />
                    <label for="a10"><?php echo $arr10["OPT_C"]; ?></label><br>
                    <input type="radio" name="a10" value="D" />
                    <label for="a10"><?php echo $arr10["OPT_D"]; ?></label><br>
                </div>
                <div class="btn btn-primary btn-lg" onclick="marktime()">Submit</div>
            </div>
        </form>
        <div>
            <br><h5 class="text-center">Click<a href="./index.html">  here  </a> to go back to HOME page</h5><br><br>
        </div>
        <script src="./Timer2.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
<?php
    mysqli_close($con);
?>