<?php
// Write a PHP script to destroy a session and unset all session variables.
session_start();

session_unset();

session_destroy();

echo "Session has been destroyed.";
?>