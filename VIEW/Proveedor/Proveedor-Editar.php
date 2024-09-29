<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proveedor</title>
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
        <center><?php echo $alm->id_prov != null ? $alm->tipoId_prov : 'Nuevo Registro'; ?></center>
    </h1>
    <form id="frm-proveedor" action="?i=proveedor&j=Guardar" method="post" class="formEd">
        <input type="hidden" name="id_prov" value="<?php echo $alm->id_prov; ?>" />
        <div class="datos">
            <label>Tipo de ID</label>
            <input type="text" list="TP" name="tipoId_prov" value="<?php echo $alm->tipoId_prov; ?>" class="form-control" placeholder="Ingrese su tipo de identificación" required>
                <datalist id="TP">
                    <option value="CC">
                    <option value="TI">
                    <option value="RC">
                    <option value="CE">
                    <option value="PA">
                    <option value="DNI">
                    <option value="PEP">
                    <option value="PPT">
                </datalist>
        </div>
        <div class="datos">
            <label>Dirección</label>
            <input type="text" name="direccion_prov" value="<?php echo $alm->direccion_prov; ?>" class="form-control" placeholder="Ingrese su dirección" required>
        </div>
        <div class="datos">
            <label>Número de Teléfono</label>
            <input type="number" name="numero_prov" value="<?php echo $alm->numero_prov; ?>" class="form-control" placeholder="Ingrese su número de telefono" min="1000000000" required>
        </div>
        <div class="datos">
            <label>Edad</label>
            <input type="number" name="edad_prov" value="<?php echo $alm->edad_prov; ?>" class="form-control" placeholder="Ingrese su edad" min="18" required>
        </div>
        <div class="datos">
            <label>ID de usuario</label>
            <input type="number" name="idusuario" value="<?php echo $alm->idusuario; ?>" class="form-control" placeholder="Ingrese su número de ID" min="1" required>
        </div>
        <br><br>
            <button>Guardar</button>
    </form>
</body>
</html>