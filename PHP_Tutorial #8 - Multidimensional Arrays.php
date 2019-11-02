<?php

$peoples = [
    ['Europe', 'white', 30],
    ['Asia', 'yellow', 25],
    ['Africa', 'black', 32]
];

// print_r($peoples);
// print_r($peoples[1][1]); // yellow

$humanity = [
    ['area'=>'Europe', 'color'=>'white', 'age'=>30],
    ['area'=>'Asia', 'color'=>'yellow', 'age'=>25],
    ['area'=>'Africa', 'color'=>'black', 'age'=>32]
];

$humanity[] = ['area'=>'p', 'color'=>'c', 'age'=>0];

// print_r($humanity[1]['color']);  // yellow
// echo count($humanity);       // 4
$popped = array_pop($humanity);
print_r($popped);

/*
 * https://www.php.net/manual/zh/function.array-pop.php
 * array_pop - 弹出数组最后一个单元（出栈）
  + array_pop() 弹出并返回 array 数组的最后一个单元，并将数组 array 的长度减一。

*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multidimensional Arrays</title>
</head>
<body>
    
</body>
</html>