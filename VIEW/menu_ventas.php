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
        <div class="contenido" id="contenido7">
                <div class="actions">
                    <button onclick="location.href='?m=ventas&n=Editar'" class="btn btn-primary">Nueva Venta</button>
                    <form action="?m=ventas&n=Editar" method="get" class="form-inline">
                        <input type="hidden" name="m" value="ventas">
                        <input type="hidden" name="n" value="Editar">
                        <label for="id_ventas">Consultar Ventas por ID:</label>
                        <input type="text" id="id_ventas" name="id_ventas" required>
                        <button type="submit" class="btn btn-info">Consultar</button>
                    </form>
                </div>
                <?php
                require_once '../CONTROLLER/ventas.controller.php';

                $controller = new VentasController();

                if (!isset($_REQUEST['m'])) {
                    $controller->Index();
                } else {
                    $accion = isset($_REQUEST['n']) ? $_REQUEST['n'] : 'Index';
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