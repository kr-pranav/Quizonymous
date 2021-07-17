<?php
    session_start();
    $_SESSION["finishtime"]=time();
    $_SESSION["timepassed"]=$_SESSION["finishtime"]-$_SESSION["starttime"];

    include '../config.php';

    
    if(isset($_POST["a1"]))     $ans1=$_POST["a1"];     else $ans1=" ";   
    if(isset($_POST["a2"]))     $ans2=$_POST["a2"];     else $ans2=" ";
    if(isset($_POST["a3"]))     $ans3=$_POST["a3"];     else $ans3=" ";
    if(isset($_POST["a4"]))     $ans4=$_POST["a4"];     else $ans4=" ";
    if(isset($_POST["a5"]))     $ans5=$_POST["a5"];     else $ans5=" ";
    if(isset($_POST["a6"]))     $ans6=$_POST["a6"];     else $ans6=" ";
    if(isset($_POST["a7"]))     $ans7=$_POST["a7"];     else $ans7=" ";
    if(isset($_POST["a8"]))     $ans8=$_POST["a8"];     else $ans8=" ";
    if(isset($_POST["a9"]))     $ans9=$_POST["a9"];     else $ans9=" ";
    if(isset($_POST["a10"]))    $ans10=$_POST["a10"];   else $ans10=" ";
    
    $con=mysqli_connect($dbhost,$dbuser,$dbpassword,$database);
    if(!$con)
    {
        echo 'Error in connecting try again '.mysqli_error($con);
        exit();
    }
    if($ans1==$_SESSION["crct1"])   $res1=$_SESSION["level"];    else    $res1=0;
    if($ans2==$_SESSION["crct2"])   $res2=$_SESSION["level"];    else    $res2=0;
    if($_SESSION["crct3"]==$ans3)   $res3=$_SESSION["level"];    else    $res3=0;
    if($_SESSION["crct4"]==$ans4)   $res4=$_SESSION["level"];    else    $res4=0;
    if($_SESSION["crct5"]==$ans5)   $res5=$_SESSION["level"];    else    $res5=0;
    if($_SESSION["crct6"]==$ans6)   $res6=$_SESSION["level"];    else    $res6=0;
    if($_SESSION["crct7"]==$ans7)   $res7=$_SESSION["level"];    else    $res7=0;
    if($_SESSION["crct8"]==$ans8)   $res8=$_SESSION["level"];    else    $res8=0;
    if($_SESSION["crct9"]==$ans9)   $res9=$_SESSION["level"];    else    $res9=0;
    if($_SESSION["crct10"]==$ans10) $res10=$_SESSION["level"];   else    $res10=0;

    $v = $_SESSION["level"];

    $q1="INSERT INTO SESSIONINFO(U_ID,DOMAIN,DIFFICULTY,QUES_ID,QUES_SNO,USER_ANS,RESULT,FINISHED_TIME) VALUES 
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q1"]},1,'$ans1',$res1,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q2"]},2,'$ans2',$res2,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q3"]},3,'$ans3',$res3,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q4"]},4,'$ans4',$res4,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q5"]},5,'$ans5',$res5,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q6"]},6,'$ans6',$res6,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q7"]},7,'$ans7',$res7,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q8"]},8,'$ans8',$res8,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q9"]},9,'$ans9',$res9,{$_SESSION["timepassed"]}),
        ({$_SESSION["user_id"]},'{$_SESSION["domain"]}',$v,{$_SESSION["q10"]},10,'$ans10',$res10,{$_SESSION["timepassed"]})";
    
    if(!mysqli_query($con,$q1))
        echo mysqli_error($con);

    $currentscore = 'SELECT SUM(RESULT) FROM SESSIONINFO' ;
    $evaluate = mysqli_query($con,$currentscore);
    $arr = mysqli_fetch_assoc($evaluate);
?>


<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Test_Submission</title>
        <meta charset="UTF-8">
        <meta name="description" content="Online quizzing site">
        <meta name="keywords" content="quiz,tech quiz"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../front-end/images/icon.jpg" type="image/icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="container">
            <div class="jumbotron  ">
                <h1 class="text-center"> Congratulations !!</h1>
                <h3 class="text-center" > Your test score is : &nbsp <?php echo $arr["SUM(RESULT)"]; ?> </h3><br>
            </div>
            <div>
                <br><br><br><br><h4 class="text-center">You will be automatically redirected to HOME page in 5 seconds..</h4><br><br>
            </div>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>


<?php
    header( "refresh:5; URL=../front-end/index.html" );

    $del='DELETE FROM SESSIONINFO WHERE QUES_SNO=1';
    //$drop='DROP TABLE SESSIONINFO';
    
    $delquery=mysqli_query($con,$del);
    
    $trun = 'TRUNCATE SESSIONINFO';         //delete all other elements without invoking the trigger.
    $trunquery = mysqli_query($con,$trun);

    mysqli_close($con); 
?>