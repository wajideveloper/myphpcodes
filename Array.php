<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Array.php" method="post">
        <label for="">Enter capital</label>
        <input type="text" name="country">
        <input type="submit">
        <br>
        <br>

    </form>

</body>
</html>

<?php

$fruits = array("apple","banana","tori","cherchandy");
echo "The element of the array is: ". $fruits[3] . "<br><br>";

// $fruits[0] = "pineappple";
// array_push($fruits," karaly");
// array_pop($fruits);
// array_shift($fruits);

$foods = array_reverse($fruits);


// print_r($foods);
// foreach($fruits as $fruit){
//     echo "$fruit <br>";
// }


// foreach($foods as $food){
//     echo "$food <br>";
// }


//assoaite array
$capitals = array(
    "USA"=>"washton dc",
    "Pakistan"=>"Islambad",
    "china"=>"bijinge");

// echo $students["Pakistan"]. "<br>";
// array_pop($capitals);
// array_shift($capitals);
//  $keys = array_keys($capitals);
//  $values = array_values($capitals);
// $capitals = array_reverse($capitals);

$capital = $capitals[$_POST["country"]];
echo "this is my country {$capital} <br><br>";


    foreach ($capitals as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

// foreach($keys as $key) {
//         echo "{$key} <br>";
//     }
// echo "<br>";
// foreach($values as $value) {
//         echo "{$value} <br>";
//     }
?>