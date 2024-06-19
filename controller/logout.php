<?php
session_start();

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario al formulario de login
header("Location: ../view/templates/login.php");
exit();
?>



