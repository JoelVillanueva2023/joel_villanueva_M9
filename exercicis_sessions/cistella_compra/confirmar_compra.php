<?php
session_start();

// Borrar la cistella de compra
session_unset();
session_destroy();

echo "<h1>Compra realitzada amb èxit!</h1>";
echo "<p>Gràcies per la teva compra!</p>";
echo '<a href="index.html">Torna a la botiga</a>';
?>

