<?php
$students = [ 
               ["name"=>"Mahadi","ID"=>2021,"dept"=>"CSE"],
              ["name"=>"Abir","ID"=>2022,"dept"=>"CSE"],
               ["name"=>"Arif","ID"=>23,"dept"=>"CSE"] 
           ];
foreach($students as $key => $student)
    {
        echo $key.": ". "Name: ".$student['name']."  "."  ID :".$student['ID']." Department: ".$student['dept']."<br>";

    }

$numbers = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
    ];

foreach($numbers as $number)
    {
      echo $number[0].$number[1].$number[2];
      echo "<br>";
    }
?>