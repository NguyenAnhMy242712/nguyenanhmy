<?php
// Write a PHP script to set a secure cookie that can only be transmitted over an encrypted connection.
$cookieName  = "my_Cookie";
$cookieValue = "Example_cookie_value";
$expirationTime = time() + 3600; 
$secureOnly = true;             
$httpOnly = true;                

setcookie(
    $cookieName, 
    $cookieValue, 
    $expirationTime, 
    "/",     
    "",      
    $secureOnly, 
    $httpOnly
);

echo "Secure cookie named '{$cookieName}' has been set.";

if (isset($_COOKIE[$cookieName])) {
    echo "<br>Cookie value: " . htmlspecialchars($_COOKIE[$cookieName]);
} else {
    echo "<br>Cookie will be available on the next page load.";
}
?>
