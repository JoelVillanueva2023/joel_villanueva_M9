<?php

$conn = mysqli_connect("localhost", "joel2", "pirineus", "test");

if (!$conn){
 echo "No s'ha pogut connectar correctament". mysqli_connect_error();

}

else {
 echo "OK";
// echo = $query = mysqli_query($conn, "SELECT * FROM Usuaris");
 $query = mysqli_query($conn, "INSERT INTO Usuaris(dni, nom , cognom) VALUES ('15','pablo','pozo')");
}

?>
