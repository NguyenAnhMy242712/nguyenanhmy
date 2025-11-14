<?php
//Write a PHP script to display the number of active sessions on the server.
$sessionSavePath = session_save_path();

if (empty($sessionSavePath)) {
    $sessionSavePath = sys_get_temp_dir();
}

$sessionFiles = glob($sessionSavePath . '/sess_*');

$activeSessions = 0;

$sessionLifetime = ini_get('session.gc_maxlifetime');
if ($sessionFiles !== false) {
    foreach ($sessionFiles as $sessionFile) {

        if (is_file($sessionFile) && filemtime($sessionFile) + $sessionLifetime > time()) {
            $activeSessions++;
        }
    }
}

echo "Session save path: $sessionSavePath<br>";
echo "Number of active sessions: $activeSessions";

?>
