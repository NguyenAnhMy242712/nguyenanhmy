<?php
//Exercise 3: Session-based role management
//After login, store the role in session and write a checking function:
session_start();
require 'ex1_2.php';

function checkAccess($required_permission) {
    global $roles;
    $user_role = $_SESSION['user_role'] ?? 'guest';
    return in_array($required_permission, $roles[$user_role]);
}

$_SESSION['user_role'] = 'user';
echo checkAccess('edit_user') ? '<button>Edit User</button><br>' : 'Bạn không có quyền sửa user<br>';
echo checkAccess('delete_user') ? '<button>Delete User</button><br>' : 'Bạn không có quyền xóa user<br>';
?>

