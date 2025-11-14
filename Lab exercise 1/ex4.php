<?php
//Write a PHP script to set a session variable named "userid" with the value 10020.
session_start();
$_SESSION['userid'] = 10020;
echo 'Session variable "userid" set to 10020';
?>