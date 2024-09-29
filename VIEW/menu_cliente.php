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
        <div class="contenido" id="contenido4">
            <div class="actions">
                <button onclick="location.href='?g=cliente&h=Editar'" class="btn btn-primary">Nuevo Cliente</button>
                <form action="?g=cliente&h=Editar" method="get" class="form-inline">
                    <input type="hidden" name="g" value="cliente">
                    <input type="hidden" name="h" value="Editar">
                    <label for="id_cliente">Consultar Cliente por ID:</label>
                    <input type="text" id="id_cliente" name="id_cliente" required>
                    <button type="submit" class="btn btn-info">Consultar</button>
                </form>
            </div>
            <?php
            require_once '../CONTROLLER/Cliente.controller.php';

            $controller = new ClienteController();

            if (!isset($_REQUEST['g'])) {
                $controller->Index();
            } else {
                $accion = isset($_REQUEST['h']) ? $_REQUEST['h'] : 'Index';
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