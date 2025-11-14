<?php
session_start();

require_once 'ex5_2.php'; // Contains getUserPermissions function

function checkAccess($permission) {
    $user_id = $_SESSION['user_id'] ?? 0; 
    if (!$user_id) return false;

    $permissions = getUserPermissions($user_id);
    return in_array($permission, $permissions);
}

function requirePermission($permission) {
    if (!checkAccess($permission)) {
        echo "You do not have permission to access this page.";
        exit();
    }
}
?>
