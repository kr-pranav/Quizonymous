<?php
    $domain=$_POST["domain"];
    $level=$_POST["level"];
    header("location: ../front-end/$domain$level.php");
?>