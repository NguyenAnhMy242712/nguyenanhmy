<?php
// ex2 - Retrieve and display the "username" cookie

header('Content-Type: text/html; charset=UTF-8');

if (isset($_COOKIE['username'])) {
    $username = htmlspecialchars($_COOKIE['username'], ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    echo "Username: " . $username;
} else {
    echo "Cookie 'username' is not set.";
}