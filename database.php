<?php 
$databaseName = "wajidshah";
$hostServer = "localhost";
$userName = "jalbali";
$password = "wajid123";
$conn = "";

try{
$conn = mysqli_connect($databaseName,
                      $hostServer,
                      $userName,
                      $password,
);
}

catch(mysqli_sql_exception){
    echo "could not connect";
}

if($conn){
    echo "you are connect";
}
?>