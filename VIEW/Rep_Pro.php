<?php
require('fpdf/fpdf.php');

// Clase personalizada para generar el PDF
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../Assets/img/log.png', 5, 4, 15); // Ajusta el tamaño del logo
        
        // Arial bold 8
        $this->SetFont('Arial', 'B', 8);
        
        // Movernos a la derecha
        $this->Cell(30);
        
        // Título
        $this->Cell(0, 10, utf8_decode('Reporte Productos'), 0, 1, 'C');
        
        // Salto de línea
        $this->Ln(5);
        
        // Encabezado de la tabla
        $this->SetFont('Arial', 'B', 10);
        $this->Cell(12, 10, 'ID', 1, 0, 'C');
        $this->Cell(80, 10, utf8_decode('Descripción'), 1, 0, 'C');
        $this->Cell(22, 10, 'Precio', 1, 0, 'C');
        $this->Cell(30, 10, 'ID Proveedor', 1, 0, 'C');
        $this->Cell(30, 10, 'ID Cliente', 1, 1, 'C'); // Salto de línea después del encabezado
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
$consulta = "SELECT * FROM producto";
$resultado = $mysqli->query($consulta);

// Crear instancia del PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 7);

// Mostrar los datos
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(12, 8, utf8_decode($row['id_producto']), 1, 0, 'C');
    $pdf->Cell(80, 8, utf8_decode($row['descripcion']), 1, 0, 'C');
    $pdf->Cell(22, 8, utf8_decode($row['precio']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['id_prov']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['id_cliente']), 1, 1, 'C'); // Salto de línea después de cada fila
}

// Output del PDF
$pdf->Output();
?>
