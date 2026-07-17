<?php
$lifetime = 15 * 60; 
$path = "/";[cite: 2, 3]
$domain = "192.168.56.101"; 
$secure = TRUE; 
$httponly = TRUE; 

session_set_cookie_params($lifetime, $path, $domain, $secure, $httponly);[cite: 2, 3]

if (session_status() == PHP_SESSION_NONE) {
    session_start();[cite: 2, 3]
}

if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== TRUE) {[cite: 2, 3]
    session_destroy();[cite: 2, 3]
    echo "<script>alert('You have not logged in. Please login first');</script>";[cite: 2, 3]
    header("Refresh:0; url=form.php");[cite: 2, 3]
    die();[cite: 2, 3]
}

if ($_SESSION["browser"] !== $_SERVER["HTTP_USER_AGENT"]) {[cite: 2, 3]
    session_destroy();[cite: 2, 3]
    echo "<script>alert('Session hijacking attack is detected!');</script>";[cite: 2, 3]
    header("Refresh:0; url=form.php");[cite: 2, 3]
    die();[cite: 2, 3]
}
?>
