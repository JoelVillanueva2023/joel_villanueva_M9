<?php
session_start();

// Inicializamos la cistella si no está ya creada
if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = [];
}

// Añadimos los productos a la cistella
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quantitat1 = isset($_POST['quantitat1']) ? (int)$_POST['quantitat1'] : 0;
    $quantitat2 = isset($_POST['quantitat2']) ? (int)$_POST['quantitat2'] : 0;

    // Producto 1
    if ($quantitat1 > 0) {
        $_SESSION['cistella'][] = ['producte' => 'Xandalls esportius', 'quantitat' => $quantitat1, 'preu' => 25];
    }

    // Producto 2
    if ($quantitat2 > 0) {
        $_SESSION['cistella'][] = ['producte' => 'Camises estampades', 'quantitat' => $quantitat2, 'preu' => 15];
    }

    // Redirigimos al usuario a la página de cistella
    header("Location: cistella_compra.php");
    exit();
}

// Mostrar la cistella de compra
echo "<h1>Cistella de compra</h1>";
if (empty($_SESSION['cistella'])) {
    echo "<p>No has afegit cap producte a la cistella.</p>";
} else {
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
}

echo '<br><a href="resum_compra.php">Finalitzar compra</a>';
?>

