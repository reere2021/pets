
<!DOCTYPE html>
<html lang = en>
<head>
        <title> Question 2 </title> 
        <meta charset="utf-8">
  </head>
<body>

<?php
date_default_timezone_set('America/Montreal');
$cookie_name = "count";
$cookie_lifespan = 30 * 24 * 60 * 60; 

if (isset($_COOKIE[$cookie_name])) {
    $count = $_COOKIE[$cookie_name] + 1;
} else {
    $count = 1;
}

setcookie($cookie_name, $count, time() + $cookie_lifespan);

if ($count == 1) {
    echo "Welcome to my webpage! It is your first time that you are here.";
} 
else {
    echo "<p>Hello, this is the " . $count . " time that you are visiting my webpage.</p>";

    if (isset($_COOKIE[$cookie_name . "_time"])) {
        $last_visit_time = $_COOKIE[$cookie_name . "_time"];
        echo "Last time you visited my webpage on: " . date('D M d H:i:s T Y', $last_visit_time);
    }
}
setcookie($cookie_name . "_time", time(), time() + $cookie_lifespan);
?>


</body>
</html>