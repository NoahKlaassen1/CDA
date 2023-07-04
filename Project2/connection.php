<?php
    $dsn = "mysql:host=localhost;dbname=project2";
    $user = "root";
    $password = "";
    $database = "project2";
    $pdo = new PDO($dsn, $user, $password);


    $conn = mysqli_connect("localhost:3306", $user, $password, $database);
?>