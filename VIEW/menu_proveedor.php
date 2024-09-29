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
        <div class="contenido" id="contenido5">
            <div class="actions">
                <button onclick="location.href='?i=proveedor&j=Editar'" class="btn btn-primary">Nuevo Proveedor</button>
                <form action="?i=proveedor&j=Editar" method="get" class="form-inline">
                    <input type="hidden" name="i" value="proveedor">
                    <input type="hidden" name="j" value="Editar">
                    <label for="id_prov">Consultar Proveedor por ID:</label>
                    <input type="text" id="id_prov" name="id_prov" required>
                    <button type="submit" class="btn btn-info">Consultar</button>
                </form>
            </div>
            <?php
            require_once '../CONTROLLER/proveedor.controller.php';

            $controller = new ProveedorController();

            if (!isset($_REQUEST['i'])) {
                $controller->Index();
            } else {
                $accion = isset($_REQUEST['j']) ? $_REQUEST['j'] : 'Index';
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