<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset="UTF-8">
  <title> Register </title> 
  <link rel = "stylesheet" href="format.css" >

</head>

<body>
  <?php include('header.php'); ?>
  <div class="side-menu">
    <ul>
      <li> <h3> Navigation </h3></li>
      <li><a href="index.php"> Home </a></li>
      <li><a class="active" href="create-account.php">Create An Account </a></li>
      <li><a href="find-pet.php"> Find a Cat/Dog </a></li>
      <li><a href="dog-care.php"> Dog Care </a></li>
      <li><a href="cat-care.php"> Cat Care </a></li>
      <li><a href="give-away.php"> Have a Pet to Give Away </a></li>
      <li><a href="contact.php"> Contact Us </a></li>
    </ul>
  </div>

  <div class="content">
  <?php

$login_file = "login.txt";


$username_regex = "/^[a-zA-Z0-9]+$/";
$password_regex = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST["username"];
    $password = $_POST["password"];

  
    if (!preg_match($username_regex, $username)) {
        echo "Error: Username can only contain letters and digits.";
    } else if (!preg_match($password_regex, $password)) {
        echo "Error: Password must be at least 4 characters long and contain at least one letter and one digit.";
    } else 
    {
     
        $login_data = file($login_file, FILE_IGNORE_NEW_LINES);
        foreach ($login_data as $line) {
            list($existing_username, $existing_password) = explode(":", $line);
            if ($username == $existing_username) {
                echo "Error: This username is already in use. Please choose another one.";
                exit;
            }
        }  
        $new_login_data = "$username:$password\n";
        file_put_contents($login_file, $new_login_data, FILE_APPEND);

        echo "Account created successfully. You can now login whenever you're ready.";
    }
}
?>
<html>
<head>
    <title>Create an account</title>
</head>
<body>
    <h1>Create an account</h1>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <br>
        Allowed username and password format:
        <br>
        Username: letters (both upper and lower case) and digits only.
        <br>
        Password: at least 4 characters long (letters and digits only), have at least one letter and at least one digit.
        <br>
        <br>
        <input type="submit" value="Create account">
    </form>
</body>
</html>

</div>

<?php include('footer.php'); ?>
<script src="Q_7_JavaScript.js"></script>
</body>


</html>