<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="doneer.css">
    <title>Doneer</title>
</head>

<body>
<div class="container">
    <header>
        <?php include 'header.php'; ?>
    </header>
    
        <h2 class="green-heading">Doneer</h2>
        
        <form id="myForm" action="doneer.php" method="POST" class="form-container">
            <input type="text" name="naam" placeholder="Naam" required class="input-field">
            <input type="email" name="email" placeholder="E-mail" required class="input-field">
            <input type="number" name="nummer" placeholder="Nummer" required class="input-field">   
            <input type="number" name="bedrag" placeholder="Bedrag" required class="input-field">
            <button type="submit" class="submit-button">Verzenden</button>
        </form> 
        
        <div class="alledonaties">
          <h2>Alle donaties</h2>
        </div>

  <div class="form-container">
  <?php 
    include 'connection.php';

    function doneer()
    {
        global $conn;

        if (isset($_POST['naam']) && isset($_POST['email']) && isset($_POST['nummer']) && isset($_POST['bedrag'])) {
            $naam = $_POST['naam'];
            $email = $_POST['email'];
            $nummer = $_POST['nummer'];
            $bedrag = $_POST['bedrag'];

            $stmt = $conn->prepare("INSERT INTO doneer (naam, email, nummer, bedrag) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $naam, $email, $nummer, $bedrag);
            $stmt->execute();
            $stmt->close();

            echo "<script>alert('Data has been successfully submitted to the database.');</script>";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        doneer();
    }

    $sql = "SELECT * FROM `doneer` ORDER BY bedrag DESC ;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $count = 0;
        while ($row = $result->fetch_assoc()) {
            $count++;
            echo "<p class='wtext tcenter'><b>" . $count . ". " . $row["naam"] . "</b>" . " Heeft €" . $row["bedrag"] . " Gedoneerd" . "</p>";
        }
    } else {
        echo "0 Resultaten";
    }
    ?>
  </div>
</div>



   



<footer>
<h3>&copy; 2023 Your Website. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="contact.php#">Terms of Service</a></h3>
</footer> 

</div>
</body>
</html>
