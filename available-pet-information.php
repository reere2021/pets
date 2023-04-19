
<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset="UTF-8">
  <title> available-pet-information </title> 
  <link rel = "stylesheet" href="format.css" >

</head>

<body>
  <?php include('header.php'); ?>
  <div class="side-menu">
    <ul>
      <li> <h3> Navigation </h3></li>
      <li><a href="index.php"> Home </a></li>
      <li><a href="create-account.php">Create An Account </a></li>
      <li><a class="active" href="find-pet.php"> Find a Cat/Dog </a></li>
      <li><a href="dog-care.php"> Dog Care </a></li>
      <li><a href="cat-care.php"> Cat Care </a></li>
      <li><a href="give-away.php"> Have a Pet to Give Away </a></li>
      <li><a href="contact.php"> Contact Us </a></li>
    </ul>
  </div>

  <div class="content">
    
    <?php

$file = fopen("pets.csv", "r");


echo "<table>\n";
echo "<tr><th>RECORDS</th>\n";


while (($data = fgetcsv($file)) !== FALSE) {
    echo "<tr>";
    foreach ($data as $field) {
        echo "<td>" . $field . "</td>";
    }
    echo "</tr>\n";
}


echo "</table>";


fclose($file);
?>
</div>

<?php include('footer.php'); ?>
<script src="Q_7_JavaScript.js"></script>
</body>


</html>


