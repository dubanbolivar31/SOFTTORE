<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SOFTTORE/ASSETS/CSS/menu.css">
    <title>SOFTTORE</title>
</head>
<body background="../ASSETS/IMG/fondo3.jpg">
    <header id="inicio" class="sup">
        <img src="../ASSETS/IMG/laeconomiaa.png">
        <br><br>   
        <nav>
            <ul>
                <li><a href="menu_administrador.php">Volver</a></li>
                <li><a href="../Index.php">Salir a la pagina de inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contenido" id="contenido1">
            <div class="actions">
                <button onclick="location.href='?a=usuario&b=Editar'" class="btn btn-primary">Nuevo Usuario</button>
                <form action="?a=usuario&b=Editar" method="get" class="form-inline">
                    <input type="hidden" name="a" value="usuario">
                    <input type="hidden" name="b" value="Editar">
                    <label for="idusuario">Consultar Usuario por ID:</label>
                    <input type="text" id="idusuario" name="idusuario" required>
                    <button type="submit" class="btn btn-info">Consultar</button>
                </form>
            </div>
            <?php
            require_once '../CONTROLLER/usuario.controller.php';

            $controller = new UsuarioController();

            if (!isset($_REQUEST['a'])) {
                $controller->Index();
            } else {
                $accion = isset($_REQUEST['b']) ? $_REQUEST['b'] : 'Index';
                call_user_func(array($controller, $accion));
            }
            ?>
        </div>
    </main>
</body>
<footer>
    <p> SOFTTORE&copy; 2024 Derechos reservados</p>
</footer>
</html>