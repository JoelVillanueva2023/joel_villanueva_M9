<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username === $password) {
        $_SESSION['username'] = $username;
        header("Location: info1.php");
    } else {
        echo "<script>alert('Usuari o contrasenya incorrectes.'); window.location.href = 'index.html';</script>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>

