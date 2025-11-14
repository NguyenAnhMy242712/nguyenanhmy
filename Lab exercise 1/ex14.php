<?php
// Write a PHP script to regenerate the session ID to prevent session fixation attacks.
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'DemoUser';
}

session_regenerate_id(true);

echo "Session ID has been regenerated.<br>";
echo "Current Session ID: " . session_id() . "<br>";
echo "Username stored in session: " . $_SESSION['username'];
?>
