<?php

    $radius = 25;
    $pi = 3.14;
    // +, -, *, /, ^
    // ** 幂^
    // echo $pi* $radius ** 2;

    // 执行顺序
    // echo 5 * (3 + 4) / 8;

    // ++ --
    // echo $radius++; // 25
    // echo $radius;   // 26
    // echo $radius--; // 25
    // echo $radius;   // 24

    // shorthand operators += -=
    $age = 20;

    // $age = $age + 10;
    $age += 10;
    echo $age;

    // $age = $age - 10;
    $age -= 10;
    echo $age;

    // number functions
    // 向下取整
    echo floor($pi);

    // 向上取整
    echo ceil($pi);

    // pi
    echo pi();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_Tutorial #6 - Numbers</title>
</head>
<body>
    
</body>
</html>