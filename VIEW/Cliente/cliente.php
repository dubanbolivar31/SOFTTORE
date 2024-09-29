<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cliente</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tabla.css">  
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>ID usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <a class="btn rpt" href="Rep_Cli.php">Generar Reporte</a>
            <tbody>
                <?php foreach($clientes as $cliente): ?>
                    <tr>
                        <td><?php echo $cliente->id_cliente; ?></td>
                        <td><?php echo $cliente->direccion; ?></td>
                        <td><?php echo $cliente->telefono; ?></td>
                        <td><?php echo $cliente->ciudad; ?></td>
                        <td><?php echo $cliente->idusuario; ?></td>
                        <td>
                            <a href="?g=cliente&h=Editar&id_cliente=<?php echo $cliente->id_cliente; ?>" class="button edit">Editar</a>
                            <a href="?g=cliente&h=Eliminar&id_cliente=<?php echo $cliente->id_cliente; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este cliente?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>
