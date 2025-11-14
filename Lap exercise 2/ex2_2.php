<?php
// Exercise 2: Write a permission checking function
// Create a function hasPermission($user_id, $permission) that returns true/false:

require 'ex1_2.php';

function hasPermission($user_id, $permission) {
    global $users, $roles;
    $user_role = $users[$user_id]['role'] ?? 'guest';
    return in_array($permission, $roles[$user_role]);
}

if (hasPermission(1, 'delete_user')) {
    echo "User 1 can delete users";
} else {
    echo "User 2 cannot delete users";
}
?>

