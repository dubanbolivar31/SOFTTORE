<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../Assets/img/log.png', 5, 4, 15); // Ajustado el tamaño del logo
        // Arial bold 10
        $this->SetFont('Arial', 'B', 8);
        // Movernos a la derecha
        $this->Cell(30);
        // Título
        $this->Cell(0, 10, utf8_decode('Reporte Usuarios'), 0, 1, 'C');
        // Salto de línea
        $this->Ln(5);
        // Encabezado de la tabla
        $this->SetFont('Arial', 'B', 7);
        $this->Cell(12, 7, 'ID', 1, 0, 'C');
        $this->Cell(18, 7, 'Tipo ID', 1, 0, 'C');
        $this->Cell(22, 7, 'ID Usuario', 1, 0, 'C');
        $this->Cell(30, 7, 'Nombre', 1, 0, 'C');
        $this->Cell(30, 7, 'Apellido', 1, 0, 'C');
        $this->Cell(35, 7, 'Correo', 1, 0, 'C');
        $this->Cell(15, 7, 'Clave', 1, 0, 'C');
        $this->Cell(18, 7, 'Estado', 1, 0, 'C');
        $this->Cell(18, 7, 'ID Rol', 1, 1, 'C');
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 6);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

require '../Model/base_datos.php';

$consulta = "SELECT * FROM usuario";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 7);

// Mostrar los datos
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(12, 8, ($row['idusuario']), 1, 0, 'C');
    $pdf->Cell(18, 8, ($row['tipoIdUsuario']), 1, 0, 'C');
    $pdf->Cell(22, 8, ($row['numIdUsuario']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['nombreUsuario']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['apellido']), 1, 0, 'C');
    $pdf->Cell(35, 8, ($row['correoUsuario']), 1, 0, 'C');
    $pdf->Cell(15, 8, ($row['claveUsuario']), 1, 0, 'C');
    $pdf->Cell(18, 8, ($row['estadoUsuario']), 1, 0, 'C');
    $pdf->Cell(18, 8, ($row['idRol']), 1, 1, 'C'); // Asegúrate de que 'idRol' exista en tu base de datos
}

$pdf->Output();
?>