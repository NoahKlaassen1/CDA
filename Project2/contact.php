<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <title>Contact</title>
</head>
<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
    
    <div class="centered">
        <h2 class="green-heading">Contact</h2>
    </div>
    <form id="myForm" action="form-contact.php" method="POST" class="form-container">
        <input type="text" name="name" placeholder="Naam" required class="input-field">
        <input type="email" name="email" placeholder="E-mail" required class="input-field">
        <input type="vraag" name="vraag" placeholder="Uw vraag" required class="input-field">
        <button type="submit" class="submit-button">Verzenden</button>
    </form>
    
    
    <footer>
        <?php include 'footer.php'; ?> 
    </footer>
    
    
</body>
</html>