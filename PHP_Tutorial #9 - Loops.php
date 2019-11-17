<?php
    // Loops

    // for
    $peopleOne = ['Tom', 'John', 'Davin'];

    for($i = 0; $i < count($peopleOne); $i++){
        echo $peopleOne[$i] . '<br>';
    }

    // foreach
    $humanity = [
        ['area'=>'Europe', 'color'=>'white', 'age'=>30],
        ['area'=>'Asia', 'color'=>'yellow', 'age'=>25],
        ['area'=>'Africa', 'color'=>'black', 'age'=>32]
    ];

    foreach($humanity as $i){
        echo $i['area'] . ' - '. $i['color'] . ' - ' . $i['age'];
        echo '<br>';
    }

    // while
    $i = 0;
    while($i < count($peopleOne)){
        echo $peopleOne[$i] . '<br>';
        $i++;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_Tutorial #9 - Loops</title>
</head>
<body>
    <h1>Humanity</h1>
    <ul>
    <?php foreach($humanity as $i) { ?>
        <h3>area: <?php echo $i['area']  ?> </h3>
        <li>color: <?php echo $i['color'] ?> </li>
        <li>age: <?php echo $i['age'] ?> </li>
    <?php } ?>
    
    </ul>
</body>
</html>