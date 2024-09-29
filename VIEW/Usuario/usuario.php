<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tablas.css">
</head>
<body background="../ASSETS/IMG/fondo3.jpg">
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de ID</th>
                    <th>Numero de identificación</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <a class="btn rpt" href="Rep_Usu.php">Generar Reporte</a>

            <tbody>
                <?php foreach($usuarios as $usuario): ?>
                <tr>
                    <td><?php echo $usuario->idusuario; ?></td>
                    <td><?php echo $usuario->tipoIdUsuario; ?></td>
                    <td><?php echo $usuario->numIdUsuario; ?></td>
                    <td><?php echo $usuario->nombreUsuario; ?></td>
                    <td><?php echo $usuario->apellido; ?></td>
                    <td><?php echo $usuario->correoUsuario; ?></td>
                    <td><?php echo $usuario->claveUsuario; ?></td>
                    <td><?php echo $usuario->estadoUsuario; ?></td>
                    <td><?php echo $usuario->idRol; ?></td>
                    <td>
                        <a href="?a=usuario&b=Editar&idusuario=<?php echo $usuario->idusuario; ?>" class="button edit">Editar</a>
                        <a href="?a=usuario&b=Eliminar&idusuario=<?php echo $usuario->idusuario; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este usuario?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
