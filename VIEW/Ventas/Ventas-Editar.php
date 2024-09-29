<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Ventas</title>
     <style type="text/css">
        body {
            background-color: #fff3e0;
            font-family: Arial, sans-serif;
            color: #5a3d2b;
        }

        h1 {
            color: #d2691e;
            font-size: 24px;
            text-align: center;
        }

        .formEd {
            display: block;
            background-color: #ffe5cc;
            border: 1px solid #ffad66;
            padding: 20px;
            border-radius: 8px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .datos label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #c75000;
        }

        .formEd input[type="text"],
        .formEd input[type="number"],
        .formEd input[type="email"],
        .formEd input[type="password"],
        .formEd select,
        .formEd input[list] {
            width: 94%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ffad66;
            border-radius: 4px;
            background-color: #fff2e0;
        }

        .formEd button {
            background-color: #d2691e;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto;
        }

        .formEd button:hover {
            background-color: #e67300;
        }

        .footer {
            background-color: #d2691e;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .datos {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>
        <center><?php echo $alm->id_ventas != null ? $alm->cantidad : 'Nuevo Registro'; ?></center>
    </h1>
    <form id="frm-ventas" action="?m=ventas&n=Guardar" method="post" class="formEd">
        <input type="hidden" name="id_ventas" value="<?php echo $alm->id_ventas; ?>" />
        <div class="datos">
            <label>Cantidad</label>
            <input type="number" name="cantidad" value="<?php echo $alm->cantidad; ?>" class="form-control" placeholder="Ingrese la cantidad" min="1" required>
        </div>
        <div class="datos">
            <label>ID de producto</label>
            <input type="number" name="id_producto" value="<?php echo $alm->id_producto; ?>" class="form-control" placeholder="Ingrese el ID del producto" min="1" required>
        </div>
        <div class="datos">
            <label>ID de administrador</label>
            <input type="number" name="id_admin" value="<?php echo $alm->id_admin; ?>" class="form-control" placeholder="Ingrese el ID del administrador" min="1" required>
        </div>
        <br><br>
            <button>Guardar</button>
    </form>
</body>
</html>