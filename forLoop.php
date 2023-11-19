<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="forLoop.php" method="post">
        <label for="">Enter Number</label>
        <input type="text" name="number">
        <input type="submit" value="counter">
        <br>
        <br>
        <label for="">Enter Number for while loop</label>
        <!-- <input type="text" name="whileNo">
        <input type="submit" value="stop"> -->
    </form>
<br>
<br>
    <!-- this is for while Loop -->
    <!-- <form action="forLoop.php" method="post">
        <label for="">Enter Number for while loop</label>
        <input type="text" name="whileNo"><br>
        <input type="submit" value="stop">
    </form>
    <br>
    <br> -->
</body>
</html>

<?php
$counter = $_POST["number"];

for($i = 0; $i <= $counter; $i++){
echo $i;
}
echo "<br>";

for($i = $counter; $i > 0; $i--){
    echo $i;
}

//for while loop


// $startNo = $_POST["whileNo"];
// $startNo = 0;
// $running = true;

// while($running){

//     if (isset($_POST["stop"])) {
//         $running = false;
//     }
    // else{
    //     $startNo;
    //     // echo $startNo. "<br>";
    // }
// }

?>