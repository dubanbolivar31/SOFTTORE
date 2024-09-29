<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../ASSETS/CSS/registro_usuario_clientee.css">
    <title>Registro Cliente</title>
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
<body>
    <main>
        <div>
            <h2>Formulario de Registro</h2>
            <form action="../CONTROLLER/controlador.registro.cliente.php" method="POST">
                
                <label>Dirección</label>
                <input type="text" name="direccion" placeholder="Ingrese su dirección" required>

                <label>Teléfono</label>
                <input type="number" name="telefono" placeholder="Ingrese su teléfono" min="1000000000" required>

                <label>Ciudad</label>
                <input type="text" name="ciudad" placeholder="Ingrese su ciudad" required>

                <input type="hidden" name="idusuario" value="<?php echo isset($_GET['idusuario']) ? $_GET['idusuario'] : ''; ?>">

                <input type="submit" value="Registrarme">
            </form>
        </div>
    </main>
    <footer>
        <p> SOFTTORE &copy; 2024 Derechos reservados</p>
    </footer>
</body>
</html>
