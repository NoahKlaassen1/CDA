<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$Woonplaats = $_POST['Woonplaats'];
$Leeftijd = $_POST['Leeftijd'];
$Bedrag = $_POST['Bedrag'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doneer";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert data into the database
$sql = "INSERT INTO doneer (Naam, Email, Woonplaats, Leeftijd, Bedrag) VALUES ('$name', '$email', '$Woonplaats', '$Leeftijd', '$Bedrag' )";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
