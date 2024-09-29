<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SOFTTORE";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoIdUsuario = $_POST['tipoIdUsuario'];
    $numIdUsuario = $_POST['numIdUsuario'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $apellido = $_POST['apellido'];
    $correoUsuario = $_POST['correoUsuario'];
    $claveUsuario = $_POST['claveUsuario'];
    $estadoUsuario = "Activo";
    $idRol = "2";

    $sql = "INSERT INTO usuario (tipoIdUsuario, numIdUsuario, nombreUsuario, apellido, correoUsuario, claveUsuario, estadoUsuario, idRol)
            VALUES ('$tipoIdUsuario', '$numIdUsuario', '$nombreUsuario', '$apellido', '$correoUsuario', '$claveUsuario', '$estadoUsuario', '$idRol')";

    if ($conn->query($sql) === TRUE) {
        $idusuario = $conn->insert_id;
        header("Location: ../VIEW/registro_cliente.php?idusuario=$idusuario");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
