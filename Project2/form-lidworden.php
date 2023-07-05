<?php

$name = $_POST['name'];
$email = $_POST['email'];
$Woonplaats = $_POST['Woonplaats'];
$Leeftijd = $_POST['Leeftijd'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO lidworden (name, email, Woonplaats, Leeftijd) VALUES ('$name', '$email', '$Woonplaats', '$Leeftijd' )";

if ($conn->query($sql) === TRUE) {
    
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    echo "Error inserting data: " . $conn->error;
}


$conn->close();
?>

