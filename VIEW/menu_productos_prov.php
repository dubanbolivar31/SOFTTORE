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
                <li><a href="../Index.php">Salir a la pagina de inicio</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contenido" id="contenido6">
            <div class="actions">
                <button onclick="location.href='?k=producto&l=Editar'" class="btn btn-primary">Nuevo Producto</button>
                <form action="?k=producto&l=Editar" method="get" class="form-inline">
                    <input type="hidden" name="k" value="producto">
                    <input type="hidden" name="l" value="Editar">
                    <label for="id_producto">Consultar Producto por ID:</label>
                    <input type="text" id="id_producto" name="id_producto" required>
                    <button type="submit" class="btn btn-info">Consultar</button>
                </form>
            </div>
            <?php
            require_once '../CONTROLLER/producto.controller.php';

            $controller = new ProductoController();

            if (!isset($_REQUEST['k'])) {
                $controller->Index();
            } else {
                $accion = isset($_REQUEST['l']) ? $_REQUEST['l'] : 'Index';
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