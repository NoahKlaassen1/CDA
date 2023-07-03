<?php
include 'doneer.php';
if (isset($_POST['submit'])){
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $woonplaats = $_POST['woonplaats'];
    $leeftijd = $_POST['leeftijd'];
    $bedrag = $_POST['bedrag'];

    $sql = "INSERT INTO `doneer` (Naam, Email, Woonplaats, Leeftijd, Bedrag) 
            VALUES ('$naam', '$email', '$woonplaats', '$leeftijd', $bedrag)";


    $query = "SELECT werknemers.id, werknemers.naam, werknemers.email, werknemers.leeftijd, werknemers.uren, winkels.adres, winkels.stad, winkels.postcode
    FROM werknemers

    $result = mysqli_query($conn, $sql);



    if ($result) {
        header('location: display.php'); 
    } else {
        die(mysqli_error($conn));
    }
}
?>