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
    <title>Informació 1</title>
</head>
<body>
    <header>
        <p>Benvingut, <?php echo $_SESSION['username']; ?>!</p>
        <nav>
            <a href="info2.php">Informació 2</a>
            <a href="logout.php">Tanca sessió</a>
        </nav>
    </header>
    <h1>Informació 1</h1>
    <p>Aquesta és la primera pàgina d'informació.</p>
</body>
</html>

