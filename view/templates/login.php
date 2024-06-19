<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calidad de Aire</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/scripts.js" defer></script>
</head>
<body>
    <div class="contenedor">
        <div class="imagen-contenedor">
            <img src="../../img/QAIRA.jpg" alt="QAIRA Logo">
        </div>
        <div class="formulario-contenedor">
            <h2 class="oswald-title">BIENVENIDO</h2>
            <?php if (isset($_GET['error'])): ?>
                <div class="alerta alerta__error">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
            <?php endif; ?>
            <form id="loginForm" action="../../controller/login_process.php" method="POST">
                <div class="input-wrapper" id="username-wrapper">
                    <label for="username" class="oswald-label">Usuario:</label>
                    <input type="text" id="username" name="username" placeholder="Usuario" oninput="convertirAMayusculas(this)" required value="<?php echo isset($_GET['username']) ? htmlspecialchars($_GET['username']) : ''; ?>">
                </div>
                <div class="input-wrapper" id="password-wrapper">
                    <label for="password" class="oswald-label">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <input type="submit" value="Iniciar Sesión" class="oswald-button">
            </form>
        </div>
    </div>
</body>
</html>







