<?php
//Write a PHP script to set a cookie and a session variable with the same name. Display their values to compare.
session_start();

$name = "user_data";

$_SESSION[$name] = "SessionValue_" . rand(1000, 9999);

setcookie($name, "CookieValue_" . rand(1000, 9999), time() + 3600, "/");

echo "<h3>Session Value:</h3>";
echo isset($_SESSION[$name]) ? $_SESSION[$name] : "Not set";
echo "<h3>Cookie Value:</h3>";
echo isset($_COOKIE[$name]) ? $_COOKIE[$name] : "Not set (refresh page to see)";
?>
