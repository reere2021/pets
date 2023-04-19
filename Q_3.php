<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Telephone Number Form Validation</title>
  </head>
  <body>
<?php
      
      $name = $_POST["name"];
      $phone = $_POST["phone"];
      $pattern = preg_match("/^\d{3}-\d{3}-\d{4}$/", $phone);

      if ($name == "") 
         echo "<h2>What is your name?</h2>";
      else
         echo "<h3>Hi, $name!<h3>";
      if($pattern) 
        echo "Valid telephone number";
      else echo "Telephone number format invalid.";
         
     ?>

  </body>
</html>
