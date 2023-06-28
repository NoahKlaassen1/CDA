<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Home Pagina</title>
</head>
<body>
    <header>
    <?php include 'header.php'; ?>
    </header>
    
    <div style="text-align: center; margin-bottom: -150px; margin-top: 50px;">
        <h2 style="color: #05da10; font-size: 50px;">Doneer</h2>
    </div>
    <form id="myForm" action="form-doneer.php" method="POST" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh;">
        <input type="text" name="name" placeholder="Naam" required style="margin-bottom: 30px; width: 550px; height: 50px;">
        <input type="email" name="email" placeholder="E-mail" required style="margin-bottom: 30px; width: 550px; height: 50px;">
        <input type="text" name="Woonplaats" placeholder="Woonplaats" required style="margin-bottom: 30px; width: 550px; height: 50px;">
        <input type="number" name="Leeftijd" placeholder="Leeftijd" required style="margin-bottom: 30px; width: 550px; height: 50px;">
        <input type="number" name="Bedrag" placeholder="Bedrag" required style="margin-bottom: 30px; width: 550px; height: 50px;">
        <button type="submit" style="background-color: #05da10; color: #ffffff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; transition: background-color 0.3s ease;">Verzenden</button>
    </form>
    
    
    <footer>
        <?php include 'footer.php'; ?> 
    </footer>
    
    
</body>
</html>