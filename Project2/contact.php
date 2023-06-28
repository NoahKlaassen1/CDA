<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Contact</title>
</head>
<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
    
    <form>
        <input type="text" id="name" name="name" placeholder="Naam" required>

        <input type="email" id="email" name="email" placeholder="E-mail" required>

        <textarea id="Vraag" name="Vraag" placeholder="Vraag" required></textarea>

        <button type="submit">Verzenden</button>
    </form>
    <footer>
        <?php include 'footer.php'; ?> 
    </footer>
    
</body>
</html>