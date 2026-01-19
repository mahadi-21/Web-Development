<?php
session_start();

// ধরলাম login successful
$_SESSION['name'] = "Mahadi";
$_SESSION['login_time'] = time();
$_SESSION['last_activity'] = time();

echo "Login successful. Session started.";
?>
