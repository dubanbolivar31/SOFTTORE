<?php
require('fpdf/fpdf.php');

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
        $this->Cell(0, 10, utf8_decode('Reporte Proveedores'), 0, 1, 'C');
        
        // Salto de línea
        $this->Ln(5);
        
        // Encabezado de la tabla
        $this->SetFont('Arial', 'B', 7);
        $this->Cell(12, 7, utf8_decode('ID'), 1, 0, 'C');
        $this->Cell(18, 7, utf8_decode('Tipo de ID'), 1, 0, 'C');
        $this->Cell(32, 7, utf8_decode('Dirección'), 1, 0, 'C');
        $this->Cell(30, 7, utf8_decode('Número'), 1, 0, 'C');
        $this->Cell(30, 7, utf8_decode('Edad'), 1, 0, 'C');
        $this->Cell(35, 7, utf8_decode('ID Usuario'), 1, 1, 'C'); // Salto de línea al final del encabezado
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
$consulta = "SELECT * FROM proveedor";
$resultado = $mysqli->query($consulta);

// Crear instancia del PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 7);

// Mostrar los datos
while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(12, 8, utf8_decode($row['id_prov']), 1, 0, 'C');
    $pdf->Cell(18, 8, utf8_decode($row['tipoId_prov']), 1, 0, 'C');
    $pdf->Cell(32, 8, utf8_decode($row['direccion_prov']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['numero_prov']), 1, 0, 'C');
    $pdf->Cell(30, 8, utf8_decode($row['edad_prov']), 1, 0, 'C');
    $pdf->Cell(35, 8, utf8_decode($row['idusuario']), 1, 1, 'C'); // Salto de línea después de cada fila
}

// Output del PDF
$pdf->Output();
?>
