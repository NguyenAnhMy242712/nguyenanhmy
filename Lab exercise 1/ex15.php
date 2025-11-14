<?php
//Write a PHP script to display the last time the session was accessed by the user.
session_start();

if (isset($_SESSION['last_access_time'])) {
    $lastAccessTime = $_SESSION['last_access_time'];
    echo "Last access time: " . date('Y-m-d H:i:s', $lastAccessTime) . "<br>";
} else {
    echo "Session started. First access.<br>";
}

$_SESSION['last_access_time'] = time();

echo "Current time: " . date('Y-m-d H:i:s');
?>
