<?php

?>
<form action="http://localhost/PHP/show.php?username={$username} and password={$password}" method="get">
    <input type="text" name="username" />
    <input type="password" name="password" />
    <input type="submit" value="Login" />
</form>
<form action="" method="post">
    <label for="">Name:</label>
    <input type="text"><br>
    <label for="">Email:</label>
    <input type="email"><br>
    <label for="">Phone:</label>
    <input type="tel"><br>
    <input type="submit" value="Submit">
</form>