<?php
// Exercise 1: Define roles and permissions using arrays
// Create associative arrays to define role-permission relationships:

$roles = [
    'admin' => ['view_user', 'create_user', 'edit_user', 'delete_user'],
    'user'  => ['view_user', 'edit_own_profile'],
    'guest' => ['view_user']
];

$users = [
    1 => ['name' => 'Alice', 'role' => 'admin'],
    2 => ['name' => 'Bob', 'role' => 'user'],
    3 => ['name' => 'Charlie', 'role' => 'guest']
];

?>
