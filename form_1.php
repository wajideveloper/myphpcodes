<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthematic Form</title>
</head>
<body>
    <form action="form_1.php" method="post">
        <!-- make sure to change the get and post here also in the method -->
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y" ><br>
        <label for="">z:</label>
        <input type="text" name="z" ><br>
        <input type="submit" value="total">
    </form>

</body>
</html>
<?php

//Second Form

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

$total = null;
// $total = abs($x);
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = sqrt($x);
// $total = pow($x,$y);
// $total = max($x,$y,$z);
// $total = min($x,$y,$z);
$total = pi();

echo $total;

?>