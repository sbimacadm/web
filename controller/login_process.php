<?php
session_start();

// Incluir archivo de conexión a la base de datos
include '../model/conexion.php';

// Obtener los datos del formulario de login
$username = $_POST['username'];
$password = $_POST['password'];

$errors = [];

// Verificar si el nombre de usuario está vacío
if (empty($username)) {
    $errors[] = 'Email is required and must be valid';
}

// Verificar si la contraseña está vacía
if (empty($password)) {
    $errors[] = 'Password is required';
}

// Si hay errores, redirigir a la página de inicio de sesión con el mensaje de error
if (!empty($errors)) {
    $error_message = implode(' ', $errors);
    header("Location: ../view/templates/index.php?error=" . urlencode($error_message) . "&username=" . urlencode($username));
    exit();
}

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM usuario WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Inicio de sesión exitoso
    $_SESSION['username'] = $username; // Guardar el nombre de usuario en la sesión
    header("Location: ../view/templates/index.php"); // Redirigir al usuario a la página principal
    exit();
} else {
    // Error de inicio de sesión
    $error_message = 'Nombre de usuario o contraseña incorrectos';
    header("Location: ../view/templates/login.php?error=" . urlencode($error_message) . "&username=" . urlencode($username));
    exit();
}

// Cerrar conexión
$conn->close();
?>



