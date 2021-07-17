<?php
    session_start();
    if(isset($_SESSION["user_id"]))
    {   
        session_destroy();
        echo    
        '<script> 
                alert("Logout Successful!"); window.location.href="../front-end/index.html";
        </script>';
    }
?>