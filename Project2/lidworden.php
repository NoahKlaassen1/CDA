<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="lidworden.css">
    <title>Lid worden</title>
</head>
<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
    
    <div class="centered">
        <h2 class="green-heading">Lid worden</h2>
    </div>
    <form id="myForm" action="form-lidworden.php" method="POST" class="form-container">
        <input type="text" name="name" placeholder="Naam" required class="input-field">
        <input type="email" name="email" placeholder="E-mail" required class="input-field">
        <input type="text" name="Woonplaats" placeholder="Woonplaats" required class="input-field">
        <input type="number" name="Leeftijd" placeholder="Leeftijd" required class="input-field">
        <button type="submit" class="submit-button">Verzenden</button>
    </form>
    
    <footer>
    <h3>&copy; 2023 Your Website. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="contact.php#">Terms of Service</a></h3>
    </footer>
    
</body>
</html>
