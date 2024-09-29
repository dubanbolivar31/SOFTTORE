<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SOFTTORE";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $idusuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : '';
    $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $ciudad = isset($_POST['ciudad']) ? $_POST['ciudad'] : '';

    // Validar datos
    if (!empty($idusuario) && !empty($direccion) && !empty($telefono) && !empty($ciudad)) {
        // Insertar cliente
        $sql = "INSERT INTO cliente (direccion, telefono, ciudad, idusuario)
        VALUES ('$direccion', '$telefono', '$ciudad', '$idusuario')";

        if ($conn->query($sql) === TRUE) {
            echo '<script type="text/javascript">
            alert("¡¡Registro Exitoso!!");    
            window.location.href="../VIEW/IndexV.php"; 
            </script> ';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
