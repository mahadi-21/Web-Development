<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>

    <h1>This is html</h1>
    <?php

    $age = 19;
    $name = "Mahadi";
    echo "Age: " . $age." years";
    echo "<br>";
    echo "Name: " . $name;
    echo "<br>";

    for($i=1; $i<=10; $i++)
    {
        echo "The line number is ".$i."<br>";
    }
    $color = ['1','2','3'];

    foreach($color as $col)
    {
        echo $col."<br>";
    }
    $arr = [
        'f1'=>'A',
        'f2'=>'B',
        'f3'=>'C',
    ];
    foreach($arr as $a => $value)
    {
        echo $a." = ".$value."<br>";
    }
    for($i=1;$i<=10;$i++)
    {
        for($j=1;$j<=$i;$j++)
        {
            echo "* ";
        }
        echo "<br>";
    }

    ?>

</body>

</html>