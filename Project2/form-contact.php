<?php
// Retrieve form data
$Naam = $_POST['Naam'];
$Email = $_POST['Email'];
$Vraag = $_POST['Vraag'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project2";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL statement to insert data into the database
$sql = "INSERT INTO contact (Naam, Email, Vraag) VALUES ('$Naam', '$Email', '$Vraag' )";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, redirect back to the same page
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
