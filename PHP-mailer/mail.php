<?php 
 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'Exception.php'; 
require 'PHPMailer.php'; 
require 'SMTP.php'; 
 
$mail = new PHPMailer; 
 
$mail->isSMTP();                      
$mail->Host = 'smtp.gmail.com';       
$mail->SMTPAuth = true;               
$mail->Username = /* Enter Gmail-ID to send the confirmation e-mails */;   
$mail->Password = /* Enter its password */;   
$mail->SMTPSecure = 'tls';            
$mail->Port = 587;                   
$_SESSION["pin"]=rand(100000,999999); 

$mail->setFrom(/* Gmail-ID */,'Quizzers inc.'); 
$mail->addReplyTo(/* Gmail-ID */,'Quizzers inc.'); 
 

$mail->addAddress($_SESSION["mail"]); 
 
$mail->isHTML(true); 
 
$mail->Subject = 'Your OTP to register with Quizonymous'; 
 
$cont="<p>Your OTP is: ".$_SESSION['pin']."</p>"; 
$bodyContent = '<h1>Welcome to the Quizonymous fam!</h1>'; 
$bodyContent .= $cont."<p>Please do not share this with anyone else.</p><p>This is a computer generated e-mail.  Do not reply.</p><p><em>This is valid only for 10 minutes</em></p>"; 
$mail->Body    = $bodyContent; 
 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    ;
} 
 
?>