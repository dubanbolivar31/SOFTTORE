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
        <div class="contenido" id="contenido3">
            <div class="actions">
                <button onclick="location.href='?e=administrador&f=Editar'" class="btn btn-primary">Nuevo Administrador</button>
                <form action="?e=administrador&f=Editar" method="get" class="form-inline">
                    <input type="hidden" name="e" value="administrador">
                    <input type="hidden" name="f" value="Editar">
                    <label for="id_admin">Consultar Administrador por ID:</label>
                    <input type="text" id="id_admin" name="id_admin" required>
                    <button type="submit" class="btn btn-info">Consultar</button>
                </form>
            </div>
            <?php
            require_once '../CONTROLLER/Admin.controller.php';

            $controller = new AdministradorController();

            if (!isset($_REQUEST['e'])) {
                $controller->Index();
            } else {
                $accion = isset($_REQUEST['f']) ? $_REQUEST['f'] : 'Index';
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