<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

echo 'Welcome, ' . htmlspecialchars($_SESSION['username']) . '!';
?>

<a href="logout.php">Logout</a>