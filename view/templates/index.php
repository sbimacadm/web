<?php
session_start();

// Verificar si el usuario ha iniciado sesión, si no, redirigirlo al formulario de login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calidad de Aire</title>
    <link rel="stylesheet" type="text/css" href="../css/styles_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar-header">
                <img src="/img/QAIRA.jpg" alt="QAIRA Logo">
            </div>
            <ul class="sidebar-menu">
                <li class="has-submenu">
                    <a href="#">Inicio <i class="fas fa-chevron-down"></i></a>
                    <ul class="submenu">
                        <li><a href="#" data-page="1">Página 1</a></li>
                        <li><a href="#" data-page="2">Página 2</a></li>
                        <li><a href="#" data-page="3">Página 3</a></li>
                        <li><a href="#" data-page="4">Página 4</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <div class="header-left">
                    <h1>Monitoreo Calidad de Aire</h1>
                </div>
                <div class="header-right">
                    <p><?php echo strtoupper($_SESSION['username']); ?></p>
                    <i class="fas fa-user-circle"></i>
                    <a href="../../controller/logout.php">Cerrar sesión</a>
                </div>
            </div>
            <div class="content">
                <h2>Bienvenido, <?php echo strtoupper($_SESSION['username']); ?>!</h2>
                <p>¡Gracias por iniciar sesión!</p>
                <div id="page-content">
                    <!-- Espacio reservado para el informe de Power BI -->
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir el archivo JavaScript -->
    <script src="../js/scripts_index.js"></script>

</body>
</html>














