<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyForm</title>
</head>
<body>
    <form action="form.php" method="post">
        <!-- make sure to change the get and post here also in the method -->
        <label for="">quantity:</label>
        <input type="text" name="quantity"><br>
        <!-- <label for="">password:</label>
        <input type="password" name="password" ><br> -->
        <input type="submit" value="total">
    </form>

</body>
</html>
<?php

//Second Form
$item = "pizza";
$price = 5.67;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;

echo "you have order {$quantity} x {$item}/s <br>";
echo "your total is : \$ {$total} <br>";

//first Form

// echo "{$_GET["username"]} <br>";
// echo "{$_GET["password"]} <br>";
// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";
// echo $_GET["password"];
?>