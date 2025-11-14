<?php
//Write a PHP script to retrieve and display the value of the session variable "userid".
session_start();

if (isset($_SESSION['userid'])) {
    echo "User ID: " . htmlspecialchars($_SESSION['userid']);
} else {
    echo "Session variable 'userid' is not set.";
}
?>