<?php
//Write a PHP script to set a session timeout after 30 minutes of inactivity.
session_start();

$sessionTimeout = 1800;

if (isset($_SESSION['LAST_ACTIVITY'])) {

    $inactive = time() - $_SESSION['LAST_ACTIVITY'];

    if ($inactive > $sessionTimeout) {
        session_unset();
        session_destroy();

        echo "Session expired. Please log in again.";
        exit();
    }
}

$_SESSION['LAST_ACTIVITY'] = time();

if (!isset($_SESSION['started'])) {
    $_SESSION['started'] = true;
    echo "Session started.";
} else {
    echo "Session active.";
}
?>
