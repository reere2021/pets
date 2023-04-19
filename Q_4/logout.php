<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang = en>
<head>
  <meta charset="UTF-8">
  <title> Question 4 </title> 
  	<link rel = "stylesheet" href="format.css" >
 
</head>
    <body>

    <?php    
        session_unset();    
        session_destroy(); 
        setcookie("userInfo", "", time() - (86400 * 30), "/");    
        header("location:index.php");   
    ?>

    </body>
</html>
