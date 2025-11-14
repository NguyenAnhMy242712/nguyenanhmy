<?php
session_start();
//Write a PHP script to limit the maximum number of concurrent sessions for a user to 3.
$userId = 123;         
$maxSessions = 3;        
$sessionDir = __DIR__ . '/user_sessions'; 
if (!is_dir($sessionDir)) mkdir($sessionDir, 0777, true);

$userFile = $sessionDir . '/user_' . $userId . '.txt';
$sessions = [];
if (file_exists($userFile)) {
    $sessions = file($userFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

$sessionLifetime = ini_get('session.gc_maxlifetime'); 
foreach ($sessions as $key => $sid) {
    $sessionFile = session_save_path() . '/sess_' . $sid;
    if (!file_exists($sessionFile) || filemtime($sessionFile) + $sessionLifetime < time()) {
        unset($sessions[$key]);
    }
}

if (count($sessions) >= $maxSessions) {
    session_unset();
    session_destroy();
    echo "Maximum session limit exceeded. Please log in again.";
    exit();
}

$sessions[] = session_id();
file_put_contents($userFile, implode("\n", $sessions));

echo "Session active. Session ID: " . session_id() . "<br>";
echo "Total active sessions for user: " . count($sessions);
?>
