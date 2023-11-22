<?php 
include("database.php");

$userName = "patrick";
$password = "rock3";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ($username, $password)";

try{
    mysql_query($conn, $sql);

    echo "user is now register";
    }
    
    catch(mysqli_sql_exception){
        echo "user could not register";
    }
    mysql_close($conn);
?>