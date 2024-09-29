<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Producto</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tabla.css">
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>ID de proveedor</th>
                    <th>ID de cliente</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <a class="btn rpt" href="Rep_Pro.php">Generar Reporte</a>
            <tbody>
                <?php foreach($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto->id_producto; ?></td>
                    <td><?php echo $producto->descripcion; ?></td>
                    <td><?php echo $producto->precio; ?></td>
                    <td><?php echo $producto->id_prov; ?></td>
                    <td><?php echo $producto->id_cliente; ?></td>
                    <td>
                        <a href="?k=producto&l=Editar&id_producto=<?php echo $producto->id_producto; ?>" class="button edit">Editar</a>
                        <a href="?k=producto&l=Eliminar&id_producto=<?php echo $producto->id_producto; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
