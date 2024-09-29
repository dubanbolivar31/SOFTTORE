<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Rol</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tabla.css">
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <a class="btn rpt" href="Rep_Rol.php">Generar Reporte</a>

            <tbody>
                <?php foreach($roles as $rol): ?>
                <tr>
                    <td><?php echo $rol->idRol; ?></td>
                    <td><?php echo $rol->Descripción; ?></td>
                    <td>
                        <a href="?c=rol&d=Editar&idRol=<?php echo $rol->idRol; ?>" class="button edit">Editar</a>
                        <a href="?c=rol&d=Eliminar&idRol=<?php echo $rol->idRol; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este rol?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
