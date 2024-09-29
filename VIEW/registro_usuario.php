<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../ASSETS/CSS/registro_usuario_clientee.css">
    <title>Registro</title>
</head>
<body background="../ASSETS/IMG/fondo.png">
    <header>
        <img src="../ASSETS/IMG/laeconomiaa.png" alt="Logo">
        <br><br>
        <nav>
            <ul>
                <li><a href="../VIEW/login.php">Atras</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div>
            <h2>Formulario de Registro</h2>
            <form action="../CONTROLLER/controlador.registro.php" method="POST">
                <label>Tipo de ID</label>
                <input list="TPID" type="text" name="tipoIdUsuario" placeholder="Tipo de identificación" required>
                <datalist id="TPID">
                    <option value="CC">
                    <option value="TI">
                    <option value="RC">
                    <option value="CE">
                    <option value="PA">
                    <option value="DNI">
                    <option value="PEP">
                    <option value="PPT">
                </datalist>

                <label>Numero de identificación</label>
                <input type="number" name="numIdUsuario" placeholder="Ingrese su número de identificación" min="10000000" required>

                <label>Nombre</label>
                <input type="text" name="nombreUsuario" placeholder="Ingrese su nombre" required>

                <label>Apellido</label>
                <input type="text" name="apellido" placeholder="Ingrese su apellido" required>

                <label>Correo</label>
                <input type="email" name="correoUsuario" placeholder="Ingrese su correo" required>

                <label>Contraseña</label>
                <input type="password" name="claveUsuario" placeholder="Ingrese su contraseña" min="8" required>

                <input type="submit" name="registrar" value="Siguiente">
            </form>
        </div>
    </main>
    <footer>
        <p> SOFTTORE &copy; 2024 Derechos reservados</p>
    </footer>
</body>
</html>
