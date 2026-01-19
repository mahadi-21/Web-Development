<?php
session_start();

$timeout = 10; // seconds (test purpose)

// 🔴 Session আছে কিনা
if (!isset($_SESSION['name'])) {
    echo "Session expired. Please login again.";
    exit;
}

// 🔴 Inactivity check
if (isset($_SESSION['last_activity'])) {
    if (time() - $_SESSION['last_activity'] > $timeout) {
        session_destroy();
        echo "Session expired due to inactivity.";
        exit;
    }
}

// 🟢 User active
$_SESSION['last_activity'] = time();

echo "Session Active<br>";
echo "User: " . $_SESSION['name'] . "<br>";
echo "Last Activity Updated";
?>
