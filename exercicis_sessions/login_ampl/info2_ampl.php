<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació 2</title>
</head>
<body>
    <header>
        <p>Benvingut, <?php echo $_SESSION['username']; ?>! <a href="logout_ampl.php">Tanca sessió</a></p>
        <nav>
            <a href="info1_ampl.php">Informació 1</a>
        </nav>
    </header>
    <h1>Informació 2</h1>
    <p>Aquesta és la segona pàgina d'informació.</p>
</body>
</html>

