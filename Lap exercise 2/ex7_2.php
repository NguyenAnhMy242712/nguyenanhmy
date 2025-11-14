<?php
require_once 'ex6_2.php';
session_start();

// Example: simulate logged-in user
$_SESSION['user_id'] = 2;

echo "<h3>Dynamic Menu</h3>";

if (checkAccess('view_user')) {
    echo '<a href="view.php">View User</a><br>';
}
if (checkAccess('edit_user')) {
    echo '<a href="edit.php">Edit User</a><br>';
}
if (checkAccess('delete_user')) {
    echo '<a href="delete.php">Delete User</a><br>';
}
