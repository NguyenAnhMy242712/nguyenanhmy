<?php

// Set a cookie named "username" with value "Gulnara Serik" that expires in 1 hour
$cookieName = "username";
$cookieValue = "Gulnara Serik";
$expire = time() + 3600; 

setcookie($cookieName, $cookieValue, $expire, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Set Cookie</title>
</head>
<body>
    <p>
        <?php
        if (isset($_COOKIE[$cookieName])) {
                echo "Cookie '{$cookieName}' is set. Value: " . htmlspecialchars($_COOKIE[$cookieName]);
        } else {
                echo "Cookie '{$cookieName}' has been sent and will be available after you reload the page.";
        }
        ?>
    </p>
</body>
</html>