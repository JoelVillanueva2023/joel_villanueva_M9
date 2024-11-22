<?php
session_start();

// Verificar si la cistella tiene productos
if (empty($_SESSION['cistella'])) {
    echo "<h1>No tens cap producte a la cistella.</h1>";
    echo '<a href="index.html">Torna a la botiga</a>';
    exit();
}

echo "<h1>Resum de la compra</h1>";
echo "<table border='1'>
        <tr><th>Producte</th><th>Quantitat</th><th>Preu</th><th>Total</th></tr>";
$total = 0;
foreach ($_SESSION['cistella'] as $producte) {
    $totalProducte = $producte['quantitat'] * $producte['preu'];
    echo "<tr>
            <td>{$producte['producte']}</td>
            <td>{$producte['quantitat']}</td>
            <td>{$producte['preu']} €</td>
            <td>{$totalProducte} €</td>
          </tr>";
    $total += $totalProducte;
}
echo "</table>";
echo "<p>Total: $total €</p>";

echo '<br><a href="confirmar_compra.php">Confirmar compra</a>';
?>

