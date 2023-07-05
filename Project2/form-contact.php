<?php

$Naam = $_POST['Naam'];
$Email = $_POST['Email'];
$Vraag = $_POST['Vraag'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO contact (Naam, Email, Vraag) VALUES ('$Naam', '$Email', '$Vraag' )";

if ($conn->query($sql) === TRUE) {
    
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    echo "Error inserting data: " . $conn->error;
}

$conn->close();
?>
