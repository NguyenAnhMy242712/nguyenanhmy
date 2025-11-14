<?php
// Write a PHP script to delete a cookie named "username".
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/');
    unset($_COOKIE['username']);
    $message = 'Cookie "username" has been deleted.';
} else {
    $message = 'Cookie "username" does not exist.';
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Delete Cookie</title>
</head>
<body>
  <p><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>