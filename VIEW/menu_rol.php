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
        <div class="contenido" id="contenido2">
            <div class="actions">
                <button onclick="location.href='?c=rol&d=Editar'" class="btn btn-primary">Nuevo Rol</button>
                <form action="?c=rol&d=Editar" method="get" class="form-inline">
                    <input type="hidden" name="c" value="rol">
                    <input type="hidden" name="d" value="Editar">
                    <label for="idRol">Consultar Rol por ID:</label>
                    <input type="text" id="idRol" name="idRol" required>
                    <button type="submit" class="btn btn-info">Consultar</button>
                </form>
            </div>
            <?php
            require_once '../CONTROLLER/rol.controller.php';

            $controller = new RolController();

            if (!isset($_REQUEST['c'])) {
                $controller->Index();
            } else {
                $accion = isset($_REQUEST['d']) ? $_REQUEST['d'] : 'Index';
                call_user_func(array($controller, $accion));
            }
            ?>
        </div>
    </main>
</body>
<footer>
    <p> SOFTTORE &copy; 2024 Derechos reservados</p>
</footer>
</html>