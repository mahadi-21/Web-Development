<?php
$username = $_GET['username'];
$password = $_GET['password'];
echo "Username: " . htmlspecialchars($username) . "<br>";
echo "Password: " . htmlspecialchars($password) . "<br>";