<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ventas</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tabla.css">
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cantidad</th>
                    <th>ID de producto</th>
                    <th>ID de administrador</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <a class="btn rpt" href="Rep_Ven.php">Generar Reporte</a>

            <tbody>
                <?php foreach($ventas as $ventas): ?>
                <tr>
                    <td><?php echo $ventas->id_ventas; ?></td>
                    <td><?php echo $ventas->cantidad; ?></td>
                    <td><?php echo $ventas->id_producto; ?></td>
                    <td><?php echo $ventas->id_admin; ?></td>
                    <td>
                        <a href="?m=ventas&n=Editar&id_ventas=<?php echo $ventas->id_ventas; ?>" class="button edit">Editar</a>
                        <a href="?m=ventas&n=Eliminar&id_ventas=<?php echo $ventas->id_ventas; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar esta venta?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
