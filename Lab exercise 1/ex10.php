<?php
//Write a PHP script to retrieve and display user preferences stored in the session variable.
session_start();

if (isset($_SESSION["preferences"]) && is_array($_SESSION["preferences"])) {

    $userPreferences = $_SESSION["preferences"];

    echo "<h3>User Preferences:</h3>";

    foreach ($userPreferences as $key => $value) {
        echo htmlspecialchars($key) . ": " . htmlspecialchars($value) . "<br>";
    }

} else {
    echo "No user preferences found.";
}
?>
