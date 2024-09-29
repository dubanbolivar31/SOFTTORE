<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tabla.css">
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de contrato</th>
                    <th>edad</th>
                    <th>ID de usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <a class="btn rpt" href="Rep_Admin.php">Generar Reporte</a>

            <tbody>
                <?php foreach($administradores as $administrador): ?>
                <tr>
                    <td><?php echo $administrador->id_admin; ?></td>
                    <td><?php echo $administrador->tipocontrato_admin; ?></td>
                    <td><?php echo $administrador->edad_admin; ?></td>
                    <td><?php echo $administrador->idusuario; ?></td>
                    <td>
                        <a href="?e=administrador&f=Editar&id_admin=<?php echo $administrador->id_admin; ?>" class="button edit">Editar</a>
                        <a href="?e=administrador&f=Eliminar&id_admin=<?php echo $administrador->id_admin; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este administrador?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
