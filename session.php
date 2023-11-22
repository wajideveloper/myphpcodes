<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
       username: <input type="text" name="username" placeholder="Username"><br><br>
       password: <input type="password" name="pass" placeholder="Password"><br>
        <input type="submit" name="Login" value="login">
        </form>
</body>
</html>

<?php

$_SESSION['username'] = $_POST["username"];
$_SESSION['password'] = $_POST["password"];

if($isset($_POST['login'])){
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo $_SESSION["username"]."<br>";
        echo $_SESSION["password"]."<br>";
    }
    else{
        echo "Please fill out all fields!";
    }
}

?>