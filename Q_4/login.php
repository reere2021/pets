<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $username = $_POST['username'];
  $password = $_POST['password'];

    $login_file = "login.txt";
    
            $_SESSION['username'] = $username;

            header('Location: give-away.php');
            exit;
        }

?>