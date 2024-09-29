
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SOFTTORE/ASSETS/CSS/loginn.css">
    <title>La Economia</title>
</head>
<body background="../ASSETS/IMG/fondo.png">
    <header>
        <img src="../ASSETS/IMG/laeconomiaa.png">
        <br><br>
        <nav>
            <ul>
                <li><a href="../index.php">Atras</a></li> 
                <li><a href="https://www.google.com">Salir</a></li> 
            </ul>
        </nav>
    </header>
    <form action="../CONTROLLER/ControladorInicio.php" method="POST" class="formlog">

        <div class="contenedor-login">
            <h2>Iniciar sesión</h2>
            <form>
                <label for="nombre">Correo electrónico:</label>
                <input type="email" id="correo" name="email" required  maxlength="50"required>
                <label for="pass">Contraseña:</label>
                <input type="password" id="contraseña" name="password" pattern= "[A-Za-z0-9#$%&-]{8,20}]" minlength="8"required >
                <button type="submit">Ingresar</button>
                <br><br>
                No tienes cuenta? <a href="../VIEW/registro_usuario.php">Registrarme</a>

            </form>
        </div>
    </form> 
    <footer>
        <p> SOFTTORE&copy; 2024 Derechos reservados</p>
    </footer>
</body>
</html>