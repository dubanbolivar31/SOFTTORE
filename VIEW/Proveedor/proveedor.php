<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>proveedor</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/SOFTTORE/ASSETS/CSS/tabla.css">
</head>
<body>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo de ID</th>
                    <th>Dirección</th>
                    <th>Número de Teléfono</th>
                    <th>Edad</th>
                    <th>ID de usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <a class="btn rpt" href="Rep_Prov.php">Generar Reporte</a>

            <tbody>
                <?php foreach($proveedores as $proveedor): ?>
                <tr>
                    <td><?php echo $proveedor->id_prov; ?></td>
                    <td><?php echo $proveedor->tipoId_prov; ?></td>
                    <td><?php echo $proveedor->direccion_prov; ?></td>
                    <td><?php echo $proveedor->numero_prov; ?></td>
                    <td><?php echo $proveedor->edad_prov; ?></td>
                    <td><?php echo $proveedor->idusuario; ?></td>
                    <td>
                        <a href="?i=proveedor&j=Editar&id_prov=<?php echo $proveedor->id_prov; ?>" class="button edit">Editar</a>
                        <a href="?i=proveedor&j=Eliminar&id_prov=<?php echo $proveedor->id_prov; ?>" class="button delete" onclick="return confirm('¿Está seguro de eliminar este proveedor?')">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
   
</body>
</html>
