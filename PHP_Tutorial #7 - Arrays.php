<?php 

// indexed arrays  索引数组
    $peopleOne = ['Tom', 'John', 'Davin'];
    // echo $peopleOne[1];

    $peopleTwo = array('Ti', 'June');
    // echo $peopleTwo[0];

    $ages = [20, 30, 40];
    // print_r($ages);

    // 重新赋值
    $ages[1] = 25; 
    // print_r($ages);

    // 添加新值
    $ages[] = 50;
    array_push($ages, 60);
    // print_r($ages);
    // 输出 数组的个数
    // echo count($ages);
    // 合并
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    // print_r($peopleThree);

// associative arrays (key & value pairs) 关联数组，键和值
    $johnOne = ['sky'=>'blue', 'banana'=>'yellow'];
    // echo $johnOne['sky'];

    $johnTwo = array('sky'=>'blue', 'banana'=>'yellow');
    // print_r($johnTwo['banana']);

    // 输出 数组的个数
    // echo count($johnOne);

    // 合并
    $johnThree = array_merge($johnTwo, $johnOne);
    print_r($johnThree); // 如果存在同名, 只显示一个

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_Tutorial #7 - Arrays</title>
</head>
<body>
    
</body>
</html>