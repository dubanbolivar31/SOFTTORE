<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
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
<body background="../ASSETS/IMG/fondo3.jpg">

    <h1>
        <center><?php echo $alm->idusuario != null ? $alm->nombreUsuario . ' ' . $alm->apellido : 'Nuevo Registro'; ?></center>
    </h1>

    <form id="frm-usuario" action="?a=usuario&b=Guardar" method="post" class="formEd">
        <input type="hidden" name="idusuario" value="<?php echo $alm->idusuario; ?>" />

        <div class="datos">
            <label>Tipo de ID</label>
            <input list="TPID" type="text" name="tipoIdUsuario" value="<?php echo $alm->tipoIdUsuario; ?>" class="form" placeholder="Tipo de identificación" required>
                <datalist id="TPID">
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
            <label>Numero de identificación</label>
            <input type="number" name="numIdUsuario" value="<?php echo $alm->numIdUsuario; ?>" class="form" placeholder="Ingrese su número de identificación" min="10000000" required>
        </div>

        <div class="datos">
            <label>Nombre</label>
            <input type="text" name="nombreUsuario" value="<?php echo $alm->nombreUsuario; ?>" class="form" placeholder="Ingrese su nombre" required>
        </div>

        <div class="datos">
            <label>Apellido</label>
            <input type="text" name="apellido" value="<?php echo $alm->apellido; ?>" class="form" placeholder="Ingrese su apellido" required>
        </div>

        <div class="datos">
            <label>Correo</label>
            <input type="email" name="correoUsuario" value="<?php echo $alm->correoUsuario; ?>" class="form" placeholder="Ingrese su correo" required>
        </div>

        <div class="datos">
            <label>Contraseña</label>
            <input type="password" name="claveUsuario" value="<?php echo $alm->claveUsuario; ?>" class="form" placeholder="Ingrese su contraseña" required>
        </div>

        <div class="datos">
            <label>ESTADO</label>
            <select name="estadoUsuario" class="form" required>
                <option value="Activo" <?php echo $alm->estadoUsuario == "Activo"? 'selected' : ''; ?>>Activo</option>
                <option value="Inactivo" <?php echo $alm->estadoUsuario == "Inactivo" ? 'selected' : ''; ?>>Inactivo</option>
            </select>

        </div>
        <div class="datos">
            <label>Rol</label>
            <select name="idRol" class="form" required>
                <option value="1" <?php echo $alm->idRol == 1 ? 'selected' : ''; ?>>Administrador</option>
                <option value="2" <?php echo $alm->idRol == 2 ? 'selected' : ''; ?>>Cliente</option>
                <option value="3" <?php echo $alm->idRol == 3 ? 'selected' : ''; ?>>Proveedor</option>
            </select>
        </div>

        <br><br>
        <button>Guardar</button>
    </form>
</body>
</html>