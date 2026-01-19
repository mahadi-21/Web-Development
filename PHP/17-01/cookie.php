<?php
setcookie('name', 'mahadi', time() + 10);

if (isset($_COOKIE['name'])) {
    echo $_COOKIE['name'];
} else {
    echo "cookie not set";
}
?>