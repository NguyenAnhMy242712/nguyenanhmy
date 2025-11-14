
<?php
//Write a PHP script to check if a cookie named "visited" exists. If it does, display a welcome message; otherwise, display a default message.
if (isset($_COOKIE['visited'])) {
    echo "Welcome back!";
    $_COOKIE['visited']++;
} else {
    echo "Welcome! This is your first visit.";
    setcookie('visited', 1, time() + (86400 * 30));
}
?>