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
        $this->SetFont('Arial', 'B', 10); // Cambiar a 10 para un título más visible
        // Movernos a la derecha
        $this->Cell(30);
        // Título
        $this->Cell(0, 10, utf8_decode('Reporte Rol'), 0, 1, 'C');
        // Salto de línea
        $this->Ln(5);
        // Encabezado de la tabla
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(20, 7, ('ID'), 1, 0, 'C'); // Cambiar el ancho
        $this->Cell(70, 7, utf8_decode('Descripción'), 1, 1, 'C'); // Cambiar el ancho
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8); // Cambiar a 8 para mejor legibilidad
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

require '../Model/base_datos.php';

$consulta = "SELECT * FROM Rol";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 8); // Cambiar a 8 para mayor legibilidad

// Mostrar los datos
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(20, 8, $row['idRol'], 1, 0, 'C'); // Cambiar el ancho
    $pdf->Cell(70, 8, utf8_decode($row['Descripción']), 1, 1, 'L'); // Cambiar el ancho
}

$pdf->Output();
?>
