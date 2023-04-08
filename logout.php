<?php
require_once 'database_connection.php';
// Start a session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: login.html');
exit;
?>
