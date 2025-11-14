<?php
session_start();
// Store an array of user preferences in the session
$_SESSION['user_preferences'] = [
    'theme' => 'dark',
    'language' => 'en',
    'timezone' => 'UTC',
    'notifications' => true,
    'items_per_page' => 20,
];

$prefs = $_SESSION['user_preferences'];
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>User Preferences (Session)</title>
</head>
<body>
  <h1>User Preferences Saved to Session</h1>
  <pre><?php echo htmlspecialchars(print_r($prefs, true)); ?></pre>
</body>
</html>