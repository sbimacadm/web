<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Usuario de la base de datos (puedes cambiarlo si has configurado uno diferente)
$password = ""; // Contraseña de la base de datos (deja en blanco si no has configurado una)
$dbname = "QAIRA"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>


