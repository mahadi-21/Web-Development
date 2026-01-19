<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data</title>
</head>

<body>
    <form action="http://localhost/PHP/17-01-26/reqr.php" method="post">
        <fieldset>
            <legend>Register info</legend>
            <label for="">Name</label>
            <input type="text" name="name"><br>
            <label for="">email</label>
            <input type="email" name="email" id=""><br>
            <label for="">Passowrd</label>
            <input type="password" name="password" id=""><br>
            <input type="submit" value="Register">
        </fieldset>
    </form>
    <?php
    $name = "mahadi";
    setcookie('name', $name, time() + 100);
    ?>

</body>

</html>