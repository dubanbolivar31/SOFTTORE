<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../Assets/img/log.png', 5, 4, 15); // Ajustado el tamaño del logo
        
        // Arial bold 8
        $this->SetFont('Arial', 'B', 8);
        
        // Movernos a la derecha
        $this->Cell(30);
        
        // Título
        $this->Cell(0, 10, utf8_decode('Reporte Clientes'), 0, 1, 'C');
        
        // Salto de línea
        $this->Ln(5);
        
        // Encabezado de la tabla
        $this->SetFont('Arial', 'B', 7);
        $this->Cell(12, 7, utf8_decode('ID'), 1, 0, 'C');
        $this->Cell(18, 7, utf8_decode('Dirección'), 1, 0, 'C');
        $this->Cell(22, 7, utf8_decode('Teléfono'), 1, 0, 'C');
        $this->Cell(30, 7, utf8_decode('Ciudad'), 1, 0, 'C');
        $this->Cell(30, 7, utf8_decode('ID usuario'), 1, 1, 'C'); // Corregido el salto de línea aquí
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        
        // Arial italic 6
        $this->SetFont('Arial', 'I', 6);
        
        // Número de página
        $this->Cell(0, 10, utf8_decode('Página ').$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

// Conectar con la base de datos
require '../Model/base_datos.php';

// Consulta SQL
$consulta = "SELECT * FROM cliente";
$resultado = $mysqli->query($consulta);

// Crear instancia del PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 7);

// Mostrar los datos
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(12, 8, utf8_decode($row['id_cliente']), 1, 0, 'C');
    $pdf->Cell(18, 8, utf8_decode($row['direccion']), 1, 0, 'C');
    $pdf->Cell(22, 8, utf8_decode($row['telefono']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['ciudad']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['idusuario']), 1, 1, 'C'); // Corregido el salto de línea aquí
}

// Output del PDF
$pdf->Output();
?>
